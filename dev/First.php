<?php
/**
 * Created by PhpStorm.
 * User: sc
 * Date: 2018/10/30/030
 * Time: 15:55
 */
namespace dev;
use PHPUnit\Util\Blacklist;

class First
{
    public function aa()
    {
        return Blacklist::$blacklistedClassNames;
    }
}