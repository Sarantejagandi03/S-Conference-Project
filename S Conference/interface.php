<?php
interface A{
    function hello($n);
}
interface B{
    function hi();
    function Bye($n);

}
class C implements A,B{
    public function hello($n)
    {
        echo "hello:".$n;
    }
    public function hi(){
        echo "hi";

    }
    public function Bye($n){
        echo "Bye bye:".$n;
    }   
}
$c = new C();
$c->hi();
?>
