<?php
    include ('funcproduct.php');
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
<div class="container bg-dark">
        <h1 class= "text-center text-light">Product</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add+
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                
                </button>
            </div>
            <div class="modal-body">
                <form action="" method = 'post'>
                    <label for="">Name</label>
                    <input type="text" name="proName" class = "form-control my-2">
                    <label for="">Qty</label>
                    <input type="text" name="proQty" class = "form-control my-2">
                    <label for="">Price</label>
                    <input type="text" name="proPrice" class = "form-control my-2">
                    <label for="">Discount</label>
                    <select name="proDis" id="" class="form-control my-2">
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                    </select>
                    <button class="btn btn-danger">Close</button>
                    <button name="btn-save"  type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container p-0">
        <table class="table text-center table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody >
                    <tr>
                    <?php input(); ?>
                    </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <h2>Are you sure you want to delete?</h2>
            <input type="text" name ="remove" id="remove-value">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="btn-remove" class="btn btn-primary">Delete</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>


</body>
<script>
    $(document).ready(function(){
        $('body').on('click','#btn-remove',function(){
            var id = $(this).attr("remove-id");
            $('#remove-value').val(id);
        });
    });
</script>
</html>