<?php

namespace ob;
/**
 * ---------------------------------------
 * Observable.phple.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/27 14:44
 * ---------------------------------------
 */
class Observable implements \SplSubject
{
    /**
     * data
     * @var array
     */
    protected $data = [];

    /**
     * observers
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
     * @param \SplObserver $observer
     *
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * 取消观察者
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * 通知观察者方法
     */
    public function notify()
    {
        /** @var \SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @inheritdoc
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->data[$name];
    }

    /**
     * @inheritdoc
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}