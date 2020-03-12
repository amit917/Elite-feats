<!DOCTYPE html>
<?php echo $this->Html->css('card');?>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>

<body>
<div class="jumbotron">
    <div class="container">
        <h2>Elite Feats </h2>
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ul>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active carousel-item">
                    <img src="la.jpg" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="item carousel-item">
                    <img src="chicago.jpg" alt="Chicago" style="width:100%;">
                </div>
                <div class="item carousel-item">
                    <img src="ny.jpg" alt="New york" style="width:100%;">
                </div>
            </div>
            <!-- Left and right controls --> <a class="left carousel-control" href="#myCarousel" data-slide="prev">

                <span class="glyphicon glyphicon-chevron-left"></span>

                <span class="sr-only">Previous</span>

            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">

                <span class="glyphicon glyphicon-chevron-right"></span>

                <span class="sr-only">Next</span>

            </a>
        </div>
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class = "row">
                <div class = "col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                        </div>
                    </div>
                </div>
                <div class = "col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <?php echo $this->Form->create()?>
                            <?php echo $this->Form->submit('Login or Register', ['name' => 'submit','class'=>'btn btn-primary'])?>
                            <?php echo $this->Form->end()?>
                        </div>
                    </div>
                </div>
                <div class = "col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <?php echo $this->Form->create()?>
                            <?php echo $this->Form->submit('Login or Register', ['name' => 'submit','class'=>'btn btn-primary'])?>
                            <?php echo $this->Form->end()?>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div class="carousel-item">
            <div class = "row">
                <div class = "col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <?php echo $this->Form->create()?>
                            <?php echo $this->Form->submit('Login or register', ['name' => 'submit','class'=>'btn btn-primary'])?>
                            <?php echo $this->Form->end()?>
                        </div>
                    </div>
                </div>
                <div class = "col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <?php echo $this->Form->create()?>
                            <?php echo $this->Form->submit('Login or register', ['name' => 'submit','class'=>'btn btn-primary'])?>
                            <?php echo $this->Form->end()?>
                        </div>
                    </div>
                </div>
                <div class = "col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <?php echo $this->Form->create()?>
                            <?php echo $this->Form->submit('Login or Register', ['name' => 'submit','class'=>'btn btn-primary'])?>
                            <?php echo $this->Form->end()?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<br>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>

</html>

