<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Inventory Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #333;"> 
    <div class="container">
    <div class="card bg-dark text-light">
            <h1 class="text-center">Car Inventory Management</h1>
            <a href="/products/create" class="btn btn-primary">Add New Units</a>
            <ul class="list-group mt-3">
                <?php foreach ($products as $product): ?>
                <li class="list-group-item">
                    <a href="/products/edit/<?=$product['id']?>" class="text-dark"><?= $product['ProductName']?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
