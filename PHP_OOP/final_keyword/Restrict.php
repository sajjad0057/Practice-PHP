<?php

final class A {

    final function x(){
        echo "Understood behaviour of final keyword".PHP_EOL;
    }

}


class B extends A {
    function x(){}
}


// Output :
//PHP Fatal error:  Class B may not inherit from final class (A)