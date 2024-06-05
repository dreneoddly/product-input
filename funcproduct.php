<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$conn = new mysqli('localhost','root','','db-php-12-1');
function insert(){
    global $conn;
    if(isset($_POST['btn-save'])){
        $name  = $_POST['proName'];
        $qty   = $_POST['proQty'];
        $price = $_POST['proPrice'];
        $dis   = $_POST['proDis'];
        $total = $price * $qty;
        if($dis == "5"){
            $payment = $total - ($total*(5/100));
        }
        else if($dis == "10"){
            $payment = $total - ($total*(10/100));
        }
        else if($dis == "15"){
            $payment = $total - ($total*(15/100));
        }
    
    $sql = "INSERT INTO `product` (`name`, `qty`, `price`, `discount`, `total`, `payment`)
    VALUES
    ('$name','$qty','$price','$dis','$total','$payment')";
    $conn->query($sql);
  }
}
insert();

function input(){
    global $conn;
    $sql = "SELECT * FROM `product`";
    $rs = $conn->query($sql);
    while($row = mysqli_fetch_assoc($rs)){
      echo ' 
      <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['qty'].'</td>
            <td>'.$row['price'].'</td>
            <td>'.$row['discount'].'</td>
            <td>'.$row['total'].'</td>
            <td>'.$row['payment'].'</td>
            <td>
                <a href="update.php?id='.$row['id'].'" class="btn btn-danger">Update</a>
                <a href="" id="btn-remove" remove-id="'.$row['id'].'" data-bs-toggle="modal" data-bs-target="#modaldelete" class="btn btn-success">Delete</a>
            </td>
                
            
        </tr>';
    }
}

function update(){
    global $conn;
    if(isset($_POST['btn-update'])){
        $name  = $_POST['proName'];
        $qty   = $_POST['proQty'];
        $price = $_POST['proPrice'];
        $dis   = $_POST['proDis'];
        $total = $price * $qty;
        $id = $_GET['id'];
        if($dis == "5"){
            $payment = $total - ($total*(5/100));
        }
        else if($dis == "10"){
            $payment = $total - ($total*(10/100));
        }
        else if($dis == "15"){
            $payment = $total - ($total*(15/100));
        }
        $sql = " UPDATE `product` SET 
        `name`='$name',`qty`='$qty',`price`='$price',`discount`='$dis',
        `total`='$total',`payment`='$payment' WHERE `id` = $id";
        $conn->query($sql);
    }
}
update();

function delete(){
    global $conn;
    if(isset($_POST['btn-remove'])){
        $id = $_POST['remove'];

        $sql = "DELETE FROM `product` WHERE `id` = '$id'";
        $rs = $conn->query($sql);
        if($rs){
            echo '
        <script>
        $(document).ready(function(){
            swal({
                title: "Success",
                text: "product form is completed!",
                icon: "success",
                button: "done",
              });
        });
        </script>
        ';
        }
    }
}
delete();