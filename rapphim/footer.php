
<div class="middle">
        <?php include('./views/slide.php');?>
       <?php include('./views/banner.php') ?>
       <div id="Content">
       <div id="MoviePart" class="part" style="background-color:rgb(0,0,0)">
           <h2 class="content-header" style="color:rgb(241, 112, 140)">Phim Mới Cập Nhật</h2>
           <p class="content-subheader">Ra mắt trong thời gian gần đây</p>
        <?php include('dmphim.php');?>
       </div>
       <?php include('./views/thongbao.php');?>
       

<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: /rapphim/register/login.php");
}
?>
 </div>
 <script>
    // <--slide script-->
        window.onload = showSlides;
        var index = -1;
        var slides = document.querySelectorAll(".slider-box");
        function showSlides(){
            for ( let x = 0; x < slides.length; x++){
                slides[x].classList.add('display-none');
            }
            index++;
            if(index > slides.length -1) { index = 0;}

            slides[index].classList.remove('display-none');

            setTimeout(showSlides, 4000);
         }    
    </script>
    
</body>
</html>
    