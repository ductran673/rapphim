<?php
session_start();
        include_once '../connect_db.php';
        if(isset($_GET['idgiohang'])) {session_unset();}
       
        $sql = "SELECT movies.moviename, movierooms.roomname, giochieu , scheduleID
        FROM movies,movierooms,schedule
        WHERE movies.id = schedule.movieID and movierooms.roomID = schedule.roomID";
          $result = $con->query($sql);
 
        
?>
      
<html>
<title> Tra cứu lịch chiếu </title>
<head>
</head>
<style>
  body{
    color:pink;
    text-shadow: 0px 0px 1px black;
  }
	h2{
		text-align: center;
		font-size: 32px;
	}
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<body>
<h2>Nhập tên phim</h2>
<form action="addtocart.php" method="POST">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:20%;">Tên Phim</th>
    <th style="width:20%;">Phòng</th>
	<th style="width:20%;">Lịch chiếu</th>
  <th style="width:20%;">Đặt vé</th>
  </tr>
  <?php while ($row=$result->fetch_assoc()) { ?>
  <tr>
  <form action="addtocart.php" method="post">
      <td><?php echo $row["moviename"];?></td>
    <td><?php echo $row["roomname"];?></td>
	  <td><?php echo $row["giochieu"];?></td>
    <!-- <th ><a href="seat.php?idschedule=<?php /*echo  $row["scheduleID"];*/ ?>">Chọn chổ</a></th> -->
    
    <td><input type="submit" name="addtocart" value="Mua vé"></td>
                <input type="hidden" name="tenphim" value="<?php echo $row["moviename"];?>">
                <input type="hidden" name="tenphong" value="<?php echo $row["roomname"];?>">
                <input type="hidden" name="giochieu" value="<?php echo $row["giochieu"];?>">
                <input type="hidden" name="id" value="<?php echo $row["scheduleID"];?>">
                
  </form>
    <?php } ?>
 
</table>
</form>
<h3> Số ghế bạn đã chọn là:<?php  if(isset($_SESSION['tencho']) ) foreach ($_SESSION['tencho'] as $ghe) { echo "  $ghe[1];"; }?></h2> 
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>

</html