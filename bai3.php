<?php 
    $n1 = $n2 = "";
?>

<!doctype html>
<html lang="en">

<style>
    .form-to{
        width: 550px;
        height: 300px;
        margin: 100px auto;
        border: 1px solid black;
    }
    .form-to-title{
        background: yellow;
        text-align: center;
        height: 70px;
    }
    .form-to-title h2{
      font-family: style ;
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
        min-width: 150px;
        font-weight: bold;
    }
    .submit{
        width: 120px;
        margin-left: 150px;
    }
    .btn-group label
    {
        font-weight: bold;
    }
</style>
  <head>
    <title>PHÉP TÍNH TRÊN 2 SỐ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="form-to">
    <div class="form-to-title"> 
        <h2>PHÉP TÍNH TRÊN 2 SỐ</h2>
    </div>
    <form class="form-tinhtoan" action="bai3-1.php" method="post" style="width:70%; margin-left:100px" >
        <div class="form-group">
            <label>Chọn phép tính:</label>
            <div>                
              <input type="radio" name="calculate" value="Cong" autocomplete="off" checked> Cộng
              <input type="radio" name="calculate" value="Tru" autocomplete="off"> Trừ
              <input type="radio" name="calculate" value="Nhan" autocomplete="off "> Nhân
              <input type="radio" name="calculate" value="Chia" autocomplete="off "> Chia                
            </div>    
        </div>
        <div class="form-group">
          <label for="">Số thứ nhất</label>
          <div style="width:76%">
            <input type="text" name="n1" class="form-control" value="<?php echo $n1?>">
          </div>
        </div>
        <div class="form-group">
          <label for="">Số thứ hai</label>
          <div style="width:76%">
            <input type="text" name="n2" class="form-control" value="<?php echo $n2?>">
          </div> 
        </div>
        <button name="submit" class="btn btn-dark submit">Tính</button>
    </form>    
  </div>    
  </body>
</html>