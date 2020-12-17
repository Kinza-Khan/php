<?php
namespace html;
 abstract class tag{
     public $_tagname;
     public function __construct(string $tagname){
$this->_tagname=$tagname;
     }
     public function writetext($text){
         echo "<$this->_tagname>$text</$this->_tagname>";
     }

 }
 class h1 extends tag{
     public function __construct()
{
    parent ::__construct("h2");
}
 }

 $h=new h1();
 $h->writetext("Mazhar karimi");

?>