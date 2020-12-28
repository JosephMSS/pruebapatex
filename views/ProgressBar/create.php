<?php
require_once "layout.php";
?>

<body>
    <h1>Hola desde create</h1>
    <form action="/?controller=ProgressBar&action=create" method="post">
    <!-- <form action="../../index.php" method="get"> -->
        <label for="quantity">Quantity</label>
        <input type="number" min="0" name="quantity" id="quantity" required="required"><br>
        <label for="goal">Goal</label>
        <input type="number" min="0" name="goal" id="goal" required="required" ><br>
        <input type="submit" value="send">
    </form>
    <div class="progressBar-container">
        <div class="progressBar"></div>
    </div>
</body>

</html>