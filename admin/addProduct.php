<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Lectures Four</title>
  </head>
  <body>
    <div class="container">
        <?php include 'navber.php' ?>

        <form action="saveProduct.php" method="post">
            <div class="mb-3 row">
                <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" name="product_name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="product_price" class="col-sm-2 col-form-label">Product Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="product_price" name="product_price">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Save">
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>