<?php
namespace tolentino\ejemplo;
class operaciones{


   function sumar($n1,$n2){
    echo "la suma es :".($n1+$n2);

    }
    function restar($n1,$n2){
        echo 'la resta es : ' .($n1-$n2);
    }

    function dividir($n1,$n2){
        if($n2!=0){
            echo 'la division es : ' .($n1/$n2);
        }else
        {
            echo 'no se pude dividir entre : 0';
        }
        
    }
    function multiplicar($n1,$n2){

        echo 'la multiplicacion es : ' .($n1*$n2);

    }
}


?>