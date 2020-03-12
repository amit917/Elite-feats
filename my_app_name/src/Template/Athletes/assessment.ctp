
<div class="card d-flex justify-content-center" >
    <div class="card-header">
        Add athlete
    </div>
    <div class="card-body">
        <div class = "container">
            <?php
            echo $this->Form->create();?>
            <div class = "row justify-content-center">
                <div class = "form-group">
                    <div class = "col">
                        <?php echo $this->Form->control("First name",['class'=>'form-control']);?>
                    </div>
                </div>
                <div class = "form-group">
                    <div class = "col">
                        <?php echo $this->Form->control("Last name",['class'=>'form-control']);?>
                    </div>
                </div>

            </div>
            <div class = "row justify-content-center">
                <div class = "form-group">
                    <div class = "col">
                        <?php echo $this->Form->control("Email *",['class'=>'form-control']);?>
                    </div>
                </div>
                <div class = "form-group">
                    <div class = "col">
                        <?php echo $this->Form->control("Phone",['class'=>'form-control']);?>
                    </div>
                </div>

            </div>
            <div class = "row justify-content-center">
                <div class = "form-group">
                    <div class = "col">
                        <?php echo $this->Form->control("Group Name",['class'=>'form-control']);?>
                    </div>
                </div>
                <div class = "form-group">
                    <div class = "col">
                        <?php echo $this->Form->control("Coach Name ",['class'=>'form-control']);?>
                    </div>
                </div>

            </div>
            <div class = "row justify-content-center">
                <div class = "form-group">
                    <div class = "col">
                        <?php echo $this->Form->control("Password * ",['class'=>'form-control']);?>
                    </div>
                </div>
                <div class = "form-group">
                    <div class = "col">
                        <?php echo $this->Form->control("Confirmed Password * ",['class'=>'form-control']);?>
                    </div>
                </div>

            </div>
            <div class = "row justify-content-center">
               <?php echo $this->Form->submit('Register');?>
            </div>
        </div>
    </div>
</div>
