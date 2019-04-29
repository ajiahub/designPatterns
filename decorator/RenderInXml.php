<?php

namespace decorator;
/**
 * ---------------------------------------
 * RenderInXml.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/29 10:41
 * ---------------------------------------
 */

/**
 * RenderInXml类
 */
class RenderInXml extends Decorator
{
    /**
     * render data as XML
     *
     * @return mixed|string
     */
    public function renderData()
    {
        $output = $this->wrapped->renderData();

        // do some fancy conversion to xml from array ...

        $doc = new \DOMDocument();

        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }
}