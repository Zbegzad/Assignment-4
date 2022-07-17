<?php
    $eroor = "";
    $x = "";
    $y = "";
    $result = $_Get;

    if(insert($_Get['operation'])){
        $x = $_Get['num1'];
        $y = $_Get['num2'];
        $op = $_Get['operation'];

        if(is_numeric($x) && is_numeric($y)){

        switch($op){
            case 'add' : $result = $x + $y;
                break;
            case 'sub' : $result = $y - $y;

            case 'pro' : $result = $x * $y;
                break;
            case 'div' : $result = $x / $y;
                break;    
        }
    }else{
        $error = " Enter number first";
    }


<h1>Calculator that does the four basic mathematic operations</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>PHP - Calculator</title>
</head>
<body>
    <form action=" ?= $_server['PHP_SELF'] ?> method="get>
        <!--Number 1-->
        <div>
            <label for="num1">Number 1</label>
            <input type="number" name="num1" id="num1" value="<?= $x ?>">
        </div>

        <!--Nujmebr  2-->
        
        <div>   
            <label for="num2">Number 2</label>
            <input type="number" name="num2" id="num2" value="<?"= $y ?>">
        </div>

        <!--result-->
        <div>
            <label for="result">Result</label>
            <input type="number" id="result" value="<?=$result ?>" disabled>
        </div>

        <!--Operation-->
        <div>
            <input type="submit" value="add" name="operation">
            <input type="submit" value="sub" name="operation">
            <input type="submit" value="pro" name="operation">
            <input type="submit" value="div" name="operation">



        </div>
    
    
    </form>
     
</body>
</html>