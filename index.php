<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
</head>
<body>
    <h1>Add a product</h1>
    <form action="traitement.php" method="post">
        <p>
            <label for="">
                Name of the product:
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label for="">
                Price of the product:
                <input type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label for="">
                Desired amount:
                <input type="number" name="qqt" value="1">
            </label>
        </p>
        <p>
            <input type="submit" name="submit" value="Add the product">
        </p>
    </form>
    
</body>
</html>