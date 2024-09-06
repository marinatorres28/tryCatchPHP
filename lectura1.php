<?php
/* Caso que mostrará un error cuando el divisor sea 0 */
if (!empty($_REQUEST["num1"]) && isset($_REQUEST["num2"])){
    try {
        $num1 = $_REQUEST["num1"];
        $num2 = $_REQUEST["num2"];
        echo "Numero 1= ".$num1."<br>Numero 2= ".$num2."<br>";
        echo "La suma de $num1 + $num2 = ".($num1 + $num2)."<br>";
        echo "La resta de $num1 - $num2 = ".($num1 - $num2)."<br>";
        echo "La multiplicación de $num1 * $num2 = ".($num1 * $num2)."<br>";
        echo "La división de $num1 ÷ $num2 = ".($num1 / $num2)."<br>";
    }
    catch (DivisionByZeroError $e){ // cualquier tipò de error - versiones anteriores a php7
        echo "<br>Hay un error<br>";
        echo $e->getMessage(); // envia el mensaje que ha capturado
    }catch (TypeError $e){
        echo "<br>Hay un error<br>";
        echo $e->getMessage();
    }catch (Throwable $e){
        echo "<br>Hay un error<br>";
        echo $e->getMessage();
    }

}else{
    header("Location: index.php");
}