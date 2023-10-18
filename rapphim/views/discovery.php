<section>
    <ul class="dmtheloai">
        <a href="" class="tentheloai">
          Tất cả
        </a>
    </ul>
    <?php while ($row=$kq->fetch_assoc()) { ?>
    <ul class="dmtheloai">
        <a href="" class="tentheloai">
          <?php echo $row["name"]; ?> 
        </a>
    </ul>
    <?php }?>
</section>
