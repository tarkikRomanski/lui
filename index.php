<?php
header('Charset:UTF-8');
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>LUI | Кишеньковий математик</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" href="image/lui%20logo16.png" type="image/png">
</head>
<body>
<h1>Lui</h1>
<h2>Ваш персональний математик у вас в кишені</h2>
<form>
    <p>Введіть вираз: </p>
    <input type="text" name="formula" id="formula">
    <p>Польська зворотня анотація: </p>
    <p id="pol_inv"></p>
    <h3 id="result">Результат: <span></span></h3>
</form>
</body>
</html>

<?php
