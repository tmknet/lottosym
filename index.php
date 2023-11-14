<?php
$css = "css.css";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="<?php echo $css; ?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <form action="lotto.php" method="post">
                <div class="form-group">
                    <label for="numbers">Wpisz 6 liczb</label>
                    <input type="text" name="numbers" id="numbers">
                </div>
                
                <input type="submit" value="submit" class="submit1">
            </form>
        </div>
    </div>
</body>
</html>
