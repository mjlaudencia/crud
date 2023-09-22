<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Inventory Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #333;"> 

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark text-light"> 
                    <div class="card-body">
                        <h1 class="text-center">Add Unit</h1>
                        <form action="/products/store" method="post">
                            <div class="form-group">
                                <label for="ProductName">Unit Details:</label>
                                <input type="text" class="form-control" name="ProductName" id="ProductName" required>
                            </div>  

                            <div class="form-group">
                                <label for="ProductDescription">Unit Description:</label>
                                <textarea class="form-control" name="ProductDescription" id="ProductDescription" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Cars_Category_id">Category:</label>
                                <select class="form-control" name="Cars_Category_id" id="Cars_Category_id" required>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ProductQuantity">Quantity:</label>
                                <input type="number" class="form-control" name="ProductQuantity" id="ProductQuantity" required>
                            </div>

                            <div class="form-group">
                                <label for="ProductPrice">Price:</label>
                                <input type="text" class="form-control" name="ProductPrice" id="ProductPrice" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
