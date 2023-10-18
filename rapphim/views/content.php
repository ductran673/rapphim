<section>
        <div class="container-phim">
            <div class="phim">
                <div class="list-phim">
                    <?php while ($row=$kq->fetch_assoc()) { ?>
                    <div class="item-phim">
                        <div class="inner-item">
                            <div class="img-phim"><a href="#"><img src="/rapphim/img/<?php echo $row["poster"]; ?>" width="250px" height="350px" alt=""></a></div>
                            <h3 class="name-phim"><a href="#"><?php echo $row["moviename"]; ?></a></h3>
                            <h3 class="year-phim"><?php echo $row["moviedates"]; ?></h3>
                            <div class="muangay"><button type="submit"  onclick="location.href='/rapphim/views/detail.php?id=<?= $row['id']?>' "> Xem chi tiết</button></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>