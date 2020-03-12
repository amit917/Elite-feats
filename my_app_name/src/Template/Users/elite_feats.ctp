<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class=" animated zoomIn ">

                <div class = "row justify-content-md-center">
                    <div class="card text-white  " style="width: 150rem; height: 40rem">
                        <?php echo $this->Html->image('header-bg.jpg', ['height'=>"650px", "width"=>"650px",'alt' => 'CakePHP']);?>
                        <div class="card-img-overlay">
                        <div class="card-body">
                            <div class = "row">

                                 <div class = "col">
                                   <?php echo $this->Html->image('head.png', ['alt' => 'CakePHP']);?>
                                 </div>
                                <div class=" animated fadeInRight ">
                            <div class = "col ">
                                <h1 class="card-title">Welcome to Elite Feats </h1>
                                <p class="card-text">Elite Feats delivers the psychological skills, tips and tools to lift your game.</p>
                                <button type="button" class="btn btn-primary">Coaches</button>
                                <button type="button" class="btn btn-primary">Athletes</button>
                                <button type="button" class="btn btn-primary">Parents</button>
                                <button type="button" class="btn btn-primary">Sports clubs </button>
                                <button type="button" class="btn btn-primary">Personal trainer </button>
                            </div>
                                </div>
                            </div>
                            <br>
                            <div class = "row">
                                <div class = "col">
                                </div>
                                <div class = "col-3 mx-auto">
                                    <div class = "float-md-left">
                                <div class = "login">
                                    <?php
                                    echo $this->Form->create();?>
                                    <div class = "row justify-content-left">

                                        <?php echo $this->Form->control("username",['class'=>'form-control']);?>
                                    </div>
                                    <div class = "row justify-content-left">
                                        <div class = "form-group">
                                            <?php echo $this->Form->control("password",['class'=>'form-control']);?>
                                        </div>
                                    </div>

                                    <div class = "row justify-content-left">
                                        <div class = "form-group">
                                            <?php echo $this->Form->submit('Login',['class'=>'btn btn-primary']);?>
                                        </div>
                                        <?php echo $this->Form->end();?>
                                    </div>
                            </div>
                                </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>






