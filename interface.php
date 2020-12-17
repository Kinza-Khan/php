<?php
interface Iwriter{
    function write($text);
}
class pen implements Iwriter{
    private $_color;
    function __construct(string $color)
    {
        $this->_color=$color;
    }
    function write($text){
    echo "<span style='color:$this->_color'>$text</span>";
 }

}
$sp =new pen("red");
$sp->write('layani lamani');


?>