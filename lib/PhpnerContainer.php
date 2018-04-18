<?php
namespace lib;
use Illuminate\Container\Container;
class PhpnerContainer extends  Container
{
    public function __construct()
    {

        $this->bind("PHPExcel",function ()
        {
            return new \PHPExcel();
        });

    }
}
