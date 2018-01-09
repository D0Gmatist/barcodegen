<?php
/**
 * @author Ryan Weber <ryan@picoprime.com>
 */

namespace PicoPrime\BarcodeGen;

interface BarcodeString
{
    public function generateString($text);
}
