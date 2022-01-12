<?php

namespace behavioral\observer;

/**
 * ---------------------------------------
 * Observablervable.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 10:13
 * ---------------------------------------
 */
class MyObservable implements Observable
{
    /**
     * data array
     *
     * @var array
     */
    protected $data = [];

    /**
     * observers
     *
     * @var \SplObjectStorage
     */
    protected $observers;

    /**
     * @inheritdoc
     * Observable constructor.
     */
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * 附加观察者
     *
     * @param \Closure $closure
     */
    public function attach(\Closure $closure)
    {
        $this->observers->attach($closure);
    }

    /**
     * 取消观察者
     *
     * @param \Closure $closure
     */
    public function detach(\Closure $closure)
    {
        $this->observers->detach($closure);
    }

    /**
     * 通知观察者方法
     */
    public function notify()
    {
        /** @var \Closure $observer */
        foreach ($this->observers as $observer) {
            $observer()->undo($this);
        }
    }

    /**
     * @inheritdoc
     *
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->data[$name];
    }

    /**
     * @inheritdoc
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}