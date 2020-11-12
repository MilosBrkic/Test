<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="obrada.php" method="get">
    <input type="number" name="broj1" placeholder="prvi broj"><br>
    <select name="operator">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="puta">*</option>
        <option value="podeljeno">/</option>
    </select>><br>

    <input type="number" name="broj2" placeholder="drugi broj"><br>
    <button type="submit" name="izracunaj">Izracunaj</button>

</form>

</body>
</html>