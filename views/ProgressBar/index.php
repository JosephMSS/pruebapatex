<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hola desde index Progressbar</h1>
    <form action="/?controller=ProgressBar&action=create" method="post">
    <!-- <form action="../../index.php" method="get"> -->
        <label for="quantity">Quantity</label>
        <input type="number" min="0" name="quantity" id="quantity" required="required"><br>
        <label for="goal">Goal</label>
        <input type="number" min="0" name="goal" id="goal" required="required" ><br>
        <input type="submit" value="send">
    </form>
</body>

</html>