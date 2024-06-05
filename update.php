<?php 

    include ('funcproduct.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE `id` = $id";
    $rs = $conn->query($sql);
    $row = mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Update</h2>
        <div class="col-6 mx-auto">
            <form action="" method = 'post'>
                <label for="">Name</label>
                <input type="text" value="<?php echo $row['name'] ?>" name="proName" class = "form-control my-2">
                <label for="">Qty</label>
                <input type="text" value="<?php echo $row['qty'] ?>" name="proQty" class = "form-control my-2">
                <label for="">Price</label>
                <input type="text" value="<?php echo $row['price'] ?>" name="proPrice" class = "form-control my-2">
                <label for="">Discount</label>
                <select name="proDis" id="" class="form-control my-2">
                    <option value="5" <?php if($row['discount']=="5") echo 'selected' ?>>5%</option>
                    <option value="10" <?php if($row['discount']=="10") echo 'selected' ?>>10%</option>
                    <option value="15" <?php if($row['discount']=="15") echo 'selected' ?>>15%</option>
                </select>
                
                <a href="product.php" class="btn btn-danger">Back</a>
                <button href="product.php" name="btn-update"  type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</body>
</html>