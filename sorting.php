<?php
if(isset($_POST['submit'])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    $num5 = $_POST["num5"];
    
    $numbers = array($num1, $num2, $num3, $num4, $num5);
    $array_size = count($numbers);
    //Sort
    for ( $i = 0; $i < $array_size; $i++ ) {
        for ($j = 0; $j < $array_size; $j++ ) {
            if ($numbers[$i] < $numbers[$j]) {
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
    }
    $num1_sorted = $numbers[0];
    $num2_sorted = $numbers[1];
    $num3_sorted = $numbers[2];
    $num4_sorted = $numbers[3];
    $num5_sorted = $numbers[4];
}
else {
    $num1_sorted = '';
    $num2_sorted = '';
    $num3_sorted = '';
    $num4_sorted = '';
    $num5_sorted = '';

}
echo 
"
<html>
    <head>
        <title>
            Sorting Five Numbers
        </title>
    </head>
    <body>
        <form method='post' action='sorting.php'>
            Enter numbers to sort:<br>
            <input type='number' name='num1' value='$num1_sorted' required><br>
            <input type='number' name='num2' value='$num2_sorted' required><br>
            <input type='number' name='num3' value='$num3_sorted' required><br>
            <input type='number' name='num4' value='$num4_sorted' required><br>
            <input type='number' name='num5' value='$num5_sorted' required><br>
            <input type='submit' name='submit' value='Sort'>
        </form>
    </body>
    
</html>
";
?>