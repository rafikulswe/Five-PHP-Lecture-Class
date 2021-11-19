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
        <?php 
            $dbConnection = mysqli_connect('localhost', 'root', '', 'php_crud_db') or die('Connection Failed');
            $result = mysqli_query($dbConnection, "SELECT * FROM products WHERE valid=1") or die('Can not fetch data');
        ?>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
    
            <tbody>
                <?php foreach ($result as $key => $row) { ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $row["product_name"] ?></td>
                        <td><?php echo $row["product_price"] ?></td>
                        <td>
                            <a class="btn btn-warning" href="editProduct.php?id=<?php echo $row["id"] ?>" role="button">Edit</a>
                            <a class="btn btn-danger" href="deleteProduct.php?id=<?php echo $row["id"] ?>" role="button">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>