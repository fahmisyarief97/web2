<div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


                <!-- First Blog Post -->
                <?php foreach ($isi_buku as $bk): ?>
                <h2>
                    <a href="#"><?php echo $bk ['judul']?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $bk['penulis']?></a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
                </a>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>