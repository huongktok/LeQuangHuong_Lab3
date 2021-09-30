<?php 
    $errD = $errR = $name="";
    $socu = $somoi = $tongtien = "";
    $dongia = 20000;
    if(isset($_POST['submit']))
    {
      //Kiem tra
      if(empty($_POST['socu']))
        $errD = "* Chưa nhập vào chỉ số";
      else
      {
        $socu = $_POST['socu'];
        if(!is_numeric($socu))
          $errD = "* Vui lòng nhập vào số";
        else if($socu <= 0)
          $errD = "* Chỉ số phải lớn hơn 0";
      }
      //Kiem tra 
      if(empty($_POST['somoi']))
        $errR = "* Chưa nhập vào chỉ số";
      else
      {
        $somoi = $_POST['somoi'];   
        if(!is_numeric($somoi))
          $errR = "* Vui lòng nhập vào số";
        else if($somoi <= 0)
          $errR = "* Chỉ số phải lớn hơn 0";
        else if(!empty($socu) && $somoi < $socu)
          $errR = "* Chỉ số mới phải lớn hơn chỉ số cũ";
      }
      //Tính tiền
      if(empty($errD) && empty($errR))
      {
        $tongtien = ($somoi - $socu)* $dongia;
      }
    }
?>

<!doctype html>
<html lang="en">
<style>
    .form-to{
      width: 600px;
      height: 530px;
      margin: 40px auto;
      border: 1px solid black;
    }
    .form-to-title{
      background: green;
      text-align: center;
      height: 70px;
    }
    .form-to-title h2{
      font-family: style;
      line-height: 70px;
    }
    .form-tinhtoan{
      padding-top:20px
    }
    .form-group
    {
      display: flex;
    }
    .form-group label{
        min-width: 100px;
        font-weight: bold;
    }
    .submit{
        width: 120px;
        margin-left: 150px;
    }
</style>
  <head>
    <title>THANH TOÁN TIỀN ĐIỆN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="form-to">
    <div class="form-to-title"> 
        <h2>THANH TOÁN TIỀN ĐIỆN</h2>
    </div>    
    <form class="form-tinhtoan" action="bai2.php" method="post" style="width:70%; margin-left:70px" >
        <div class="form-group">
          <label for="">Tên chủ hộ</label>
          <div style="width:76%">
            <input type="text" name="name" class="form-control" value="<?php echo $name?>">
            <small><?php echo $errD?></small>
          </div>          
        </div>
        <div class="form-group">
          <label for="">Chỉ số cũ</label>
          <div style="width:76%">
            <input type="text" name="socu" class="form-control" value="<?php echo $socu?>">
            <small><?php echo $errR?></small>
            (Kw)
          </div>         
        </div>
        <div class="form-group">
          <label for="">Chỉ số mới</label>
          <div style="width:76%">
            <input type="text" name="somoi" class="form-control" value="<?php echo $somoi?>">
            <small><?php echo $errR?></small>
            (Kw)
          </div>         
        </div>
        <div class="form-group">
          <label for="">Đơn giá</label>
          <div style="width:76%">
            <input type="text" name="dongia" readonly class="form-control" value="<?php echo $dongia?>">
          (Đồng)
          </div>
        </div>        
        <div class="form-group">
          <label for="">Số tiền thanh toán</label>
          <input type="text" name="tongtien" readonly class="form-control" value="<?php echo $tongtien?>">
          (Đồng)
        </div>
        <button name="submit" class="btn btn-dark submit">Tính</button>
    </form>    
  </div>   
  </body>
</html>