<?php
require_once('vendor/autoload.php');
use \Major\Helper\StrHelper;
echo StrHelper::setStr("Hello my name is James")::repeat(3);
// Result : Hello my name is James Hello my name is James Hello my name is James
echo "<hr>";

echo StrHelper::setStr("Im from England")::slice(0, 3);
// Result : Hel
echo "<hr>";

echo StrHelper::setStr("I have brother")::length();
// Result : 14
echo "<hr>";

echo StrHelper::setStr("This is my message")::toUpperCase();
// Result : THIS IS MY MESSAGE
echo "<hr>";

echo StrHelper::setStr("and I have Smart Phone")::toLowerCase();
// Result : and i have smart phone
echo "<hr>";

echo StrHelper::setStr("H")::toASCII();
// Result : 72
echo "<hr>";

echo StrHelper::setStr("Hi my name is murat")::replace("murat", "james");
// Result : Hi my name is james
echo "<hr>";

echo StrHelper::setStr("Hi im living italy")::includes("italy");
// Result :1
echo "<hr>";

echo StrHelper::setStr("Hi im living sweden")::endsWith("sweden");
// Result :1
echo "<hr>";

echo StrHelper::setStr("Hi im living sweden")::startsWith("Hi");
// Result :1
echo "<hr>";