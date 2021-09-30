<?php 
    $errD = $errR = $dai = $rong = $dientich = "";
    if(isset($_POST['submit']))
    {
      //Kiem tra chieu dai
      if(empty($_POST['dai']))
        $errD = "* Chưa nhập vào chiều dài";
      else
      {
        $dai = $_POST['dai'];
        if(!is_numeric($dai))
          $errD = "* Chỉ cho phép nhập số";
        else if($dai <= 0)
          $errD = "* Chiều dài phải lớn hơn 0";
      }

      //Kiem tra chieu rong
      if(empty($_POST['rong']))
        $errR = "* Chưa nhập vào chiều rộng";
      else
      {
        $rong = $_POST['rong'];
        if(!is_numeric($rong))
          $errR = "* Chỉ cho phép nhập số";
        else if($rong <= 0)
          $errR = "* Chiều rộng phải lớn hơn 0";
        else if(!empty($dai) && $rong >= $dai)
          $errR = "* Chiều rộng phải nhỏ hơn chiều dài";
      }

      //Tính diện tích 
      if(empty($errD) && empty($errR))
      {
        $dientich = $dai * $rong;
      }
    }
?>

<!doctype html>
<html lang="en">
<style>
    .form-to{
      width: 500px;
      height: 350px;
      margin: 100px auto;
      border: 1px solid black;
    }
    .form-to-title{
      background: blue;
      text-align: center;
      height: 70px;
    }
    .form-to-title h2{
      font-family: style;
      line-height: 70px;
    }
    .form-tinhtoan{
      padding-top:10px
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
      margin-left: 100px;
    }
</style>
  <head>
    <title>DIỆN TÍCH HÌNH CHỮ NHẬT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="form-to">
    <div class="form-to-title"> 
      <h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
    </div>  
    <form class="form-tinhtoan" action="bai1.php" method="post" style="width:70%; margin-left:90px" >
      <div class="form-group">
        <label for="">Chiều dài</label>
        <div style="width:76%">
          <input type="text" name="dai" class="form-control" value="<?php echo $dai?>">
          <small><?php echo $errD?></small>
        </div>          
      </div>
      <div class="form-group">
        <label for="">Chiều rộng</label>
        <div style="width:76%">
          <input type="text" name="rong" class="form-control" value="<?php echo $rong?>">
          <small><?php echo $errR?></small>
        </div>  
      </div>
      <div class="form-group">
        <label for="">Diện tích</label>
        <input type="text" name="dientich" readonly class="form-control" value="<?php echo $dientich?>">
      </div>
      <button name="submit" class="btn btn-dark submit">Tính</button>
    </form>    
  </div>    
  </body>
</html>