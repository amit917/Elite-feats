<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<?php
echo $this->Form->create();?>

<?php
echo $this->Form->control("search",['class'=>'form-control']);
?>

<br>
<div class="table-content">
    <div class = "row">
        <div class = "col ">
            <?php foreach ($athletes as $athlete): ?>
                <div class="card w-100 ">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $athlete->user_firstname ?></h5>
                        <div class = "row">
                            <div class = "col">
                                <h6 class="card-subtitle mb-2 text-muted">Groups</h6>
                            </div>
                            <div class = "col">
                                <h6 class="card-subtitle mb-2 text-muted">Coach</h6>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "col">
                                <h6 class="card-subtitle mb-2 text-muted">Assessment name</h6>
                            </div>
                            <div class = "col">
                                <h6 class="card-subtitle mb-2 text-muted">Date</h6>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "col">
                                <h6 class="card-subtitle mb-2 text-muted">No of Reports</h6>
                            </div>
                            <div class = "col">
                                <h6 class="card-subtitle mb-2 text-muted">Status</h6>
                            </div>
                        </div>
                        <p class="card-text"></p>
                      <?php  echo $this->Html->link(
                        ' Send User Email',
                        ['controller' => 'Coaches', 'action' => 'Email']
                        );?>

                    </div>
                </div>
                <br>
            <?php endforeach; ?>

        </div>
        <div class = "col col-sm-2 sidenav">
            <div class = "card-item">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Filter</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Assessment Date</h6>

                        <?php
                        echo $this->Form->create();?>
                        <div class ="row">
                            <div class = "col">
                                <?php
                                echo $this->Form->control("start-date",['class'=>'form-control']);
                                ?>
                            </div>
                            <div class = "col">
                                <?php
                                echo $this->Form->control("end-date",['class'=>'form-control']);
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class = "card-item">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Group Name</h6>

                        <?php
                        echo $this->Form->create();?>
                        <div class ="row">
                            <div class = "col">
                                <?php
                                echo $this->Form->control("Search",['class'=>'form-control']);
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class = "card-item">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Assessment name</h6>

                        <?php
                        echo $this->Form->create();?>
                        <div class ="row">
                            <div class = "col">
                                <?php
                                echo $this->Form->control("Search",['class'=>'form-control']);
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $('document').ready(function(){
            $('#search').keyup(function(){
                var searchkey = $(this).val();
                searchTags( searchkey );
            });

            function searchTags( keyword ){
                var data = keyword;
                $.ajax({
                    method: 'get',
                    url : "<?php echo $this->Url->build( [ 'controller' => 'Coaches', 'action' => 'Search' ] ); ?>",
                    data: {keyword:data},

                    success: function( response )
                    {
                        $( '.table-content' ).html(response);
                    }
                });
            };
        });
    </script>



