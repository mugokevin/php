<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_POST['sub'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oprnd = $_POST['sub'];
    if ($oprnd=="+")
        $ans = $num1 + $num2;
    else if ($oprnd=="-")
        $ans = $num1 - $num2;
    else if ($oprnd=="*")
        $ans = $num1 * $num2;
    else if ($oprnd=="/")
        $ans = $num1 / $num2;
}
?>
<form action="">
    first number: <input name="n1" value=""><br>
    second number: <input name="n2" value=""><br>
    <input type="submit" name="sub" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="sub" value="*">
    <input type="submit" name="sub" value="/"><br>
    <br>result: <input type="text" value="<?php echo $ans; ?>"><br>
</form>
</body>
</html>