# String-Helper
You can use easy String Methods

# Install
> composer require majoreasy/stringhelper

# Usage
> require_once('vendor/autoload.php');
> use \Major\Helper\StrHelper;

* toJadenCase
> echo StrHelper::setStr("hi i like tea")::toJadenCase(); <br>
// Hi I Like Tea

* Repeat
> echo StrHelper::setStr("Hello my name is James")::repeat(3); <br>
// Result : Hello my name is James Hello my name is James Hello my name is James

* Slice
> echo StrHelper::setStr("Im from England")::slice(0, 3); <br>
// Result : Im

* Length
> echo StrHelper::setStr("I have brother")::length(); <br>
// Result : 14

* toUpperCase
> echo StrHelper::setStr("This is my message")::toUpperCase(); <br>
// Result : THIS IS MY MESSAGE

* toLowerCase
> echo StrHelper::setStr("and I have Smart Phone")::toLowerCase(); <br>
// Result : and i have smart phone

* toASCII
echo StrHelper::setStr("H")::toASCII(); <br>
// Result : 72

* Replace
> echo StrHelper::setStr("Hi my name is murat")::replace("murat", "james"); <br>
// Result : Hi my name is james

* includes
> echo StrHelper::setStr("Hi im living italy")::includes("italy"); <br>
// Result :1

* endsWith
> echo StrHelper::setStr("Hi im living sweden")::endsWith("sweden"); <br>
// Result :1

* startsWith
> echo StrHelper::setStr("Hi im living sweden")::startsWith("Hi");<br> 
// Result :1







