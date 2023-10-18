<div class="clear"></div>
<div class="main">
    <?php
if(isset($_GET['action'])){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else{
      $tam = '';
      $query ='';
    }if($tam=='quanlydienvien'&& $query=='them'){
       include("modules/quanlydanhmucrapphim/them.php");
       include("modules/quanlydanhmucrapphim/lietke.php");
    }else if($tam=='quanlydienvien' && $query=='sua'){
         include("modules/quanlydanhmucrapphim/sua.php");


    }else if($tam=='quanlyphong' && $query=='them'){
          include("modules/quanlyphong/them.php");
          include("modules/quanlyphong/lietke.php");
    }else if($tam=='quanlyphong' && $query=='sua'){
          include("modules/quanlyphong/sua.php");
    
    }else if($tam=='quanlyphim' && $query=='them'){
          include("modules/quanlyphim/them.php");
          include("modules/quanlyphim/lietke.php");
    }else if($tam=='quanlyphim' && $query=='sua'){
          include("modules/quanlyphim/sua.php");
          
      }else if($tam=='quanlydangkithanhvien' && $query=='them'){
            include("modules/quanlydangkithanhvien/them.php");
            include("modules/quanlydangkithanhvien/lietke.php");
      }else if($tam=='quanlydangkithanhvien' && $query=='sua'){
            include("modules/quanlydangkithanhvien/sua.php");
                               
    }else{
      include("modules/dashboard.php");
    }
    ?>
     </div>