<?php
require_once "../common.php";
?>
<form action="" method="post">
    <label for="firstNumber">Insira o primeiro número</label>
    <br>
    <input type="number" name="firstNumber" id="">
    <br>
    <label for="secondNumber">Inisira o segundo número</label>
    <br>
    <input type="text" name="secondNumber" id="">
    <br><br>
    <input type="submit" value="Enviar" name="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $firstNumber = (int) $_POST['firstNumber'];
    $secondNumber = (int) $_POST['secondNumber'];

    function calculateEvenNumbersSum(int $firstNumber, int $secondNumber)
    {
        $list = [];
        
        while($firstNumber != $secondNumber){

            if($firstNumber % 2 === 0){
                $list[] = $firstNumber;
            }

            $firstNumber++; 
        }

        $evenNumbersSum = array_sum($list);
        var_dump($evenNumbersSum);
    }

    calculateEvenNumbersSum($firstNumber, $secondNumber);
}

// Bundão
?>