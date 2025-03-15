<?php include 'inc/header.php'; ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />




<!--Breadcrumb Start-->
<div class="pq-breadcrumb pq-bg-dark pq-bg-img-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h1>Gallery</h1>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb align-items-center">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home me-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb End-->

<!--3 Column Start-->
<section class="">
    <div class="container">
        <div class="row">

            <?php
            for ($x = 1; $x <= 14; $x++) {
                echo '

                <div class="col-md-3 mb-4">
                    <a data-fancybox="gallery" href="img/dinucreations'.$x.'.jpg">
                        <img src="img/dinucreations'.$x.'.jpg" class="gallery" loading="lazy">
                    </a>
                </div>

                ';

            }
            ?>



        </div>
    </div>
</section>
<!--3 Column End-->

<script type="text/javascript">
    var d = document.getElementById("gallery");

    d.className += " current-menu-item";
</script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<?php include 'inc/footer.php'; ?>