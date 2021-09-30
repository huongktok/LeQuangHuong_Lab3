<?php 
    $pheptinh = $so1 = $so2 = $ketqua = "";
    if(isset($_POST["submit"])&& isset($_POST["calculate"]))
{
    $so1=$_POST["n1"];
    $so2=$_POST["n2"];
    switch ($_POST["calculate"]) {
        case "Cong": {$pheptinh="Cộng";$ketqua=$so1+$so2;break;}
        case "Tru": {$pheptinh="Trừ";$ketqua=$so1-$so2;break;}
        case "Nhan": {$pheptinh="Nhân";$ketqua=$so1*$so2;break;}
        case "Chia": {
            $pheptinh="Chia";
            if ($so2==0) $ketqua="Không được chia cho 0";
            else $ketqua=$so1/$so2;
            break;
        }
        default: echo "Sai phép toán! Hãy nhập lại!";
    };
}
?>
<!doctype html>
<html lang="en">
<style>
    .form-to{
        width: 550px;
        height: 350px;
        margin: 100px auto;
        border: 1px solid black;
    }
    .form-to-title{
        background: yellow;
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
                <td class="second-right">
                    <input type="radio" name="PhepTinh" checked> <?php echo $pheptinh?>
                </td>              
            </div>    
        </div>
        <div class="form-group">
          <label for="">Số thứ nhất</label>
          <div style="width:76%">
            <input type="text" name="so1" class="form-control" value="<?php echo $so1?>">
          </div>
        </div>
        <div class="form-group">
          <label for="">Số thứ hai</label>
          <div style="width:76%">
            <input type="text" name="so2" class="form-control" value="<?php echo $so2?>">
          </div>
        </div>
        <div class="form-group">
          <label for="">Kết quả</label>
          <div style="width:76%">
            <input type="text" name="ketqua" readonly class="form-control" value="<?php echo $ketqua?>">
          </div> 
        </div>
        <!-- Back to the front-page -->
        <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
    </form>    
  </div>    
  </body>
</html>