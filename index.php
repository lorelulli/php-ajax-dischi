<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="my-app/dist/css/app.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script>
        <script src="https://kit.fontawesome.com/b125f3be7d.js" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <div class="container">

            <header>
                <div class="container-img">
                    <img src="img/spotifyy.png" alt="">

                </div>


            </header>

            <main>
                <div class="container-cards">
                    <?php  include "data.php" ?>

                    <?php
                        foreach ($albums as $key => $album) { ?>


                                    <div class="container-card">
                                        <div class="card">
                                            <img src="<?php echo $album['image']  ?>" alt="">
                                            <h2><?php echo $album['name'] ?></h2>
                                            <p><?php echo $album['band'] ?></p>
                                            <p><?php echo $album['year'] ?></p>

                                        </div>

                                    </div>





                        <?php }?>



                </div>

            </main>

        </div>

    </body>
</html>
