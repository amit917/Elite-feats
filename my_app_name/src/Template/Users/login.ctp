<div class="card d-flex justify-content-center" >
    <div class="card-header">
        Register or Login
    </div>
    <div class="card-body">
        <div class = "container">
            <div class = "row">
                <div class = "col">
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
                <div class = "col">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col">
                                <div class = "login">
                                   <div class = "row">
                                       <div class = "col">
                                       <div class = "form-group">
                                           <?php echo $this->Form->control("First name",['class'=>'form-control'])?>
                                       </div>
                                       </div>
                                       <div class = "col">
                                           <div class = "form-group">
                                               <?php echo $this->Form->control("Last name",['class'=>'form-control'])?>
                                           </div>
                                       </div>
                                   </div>
                                    <div class = "row">
                                        <div class = "col">
                                            <div class = "form-group">
                                                <?php echo $this->Form->control("Email",['class'=>'form-control'])?>
                                            </div>
                                        </div>
                                        <div class = "col">
                                            <div class = "form-group">
                                                <?php echo $this->Form->control("Phone",['class'=>'form-control'])?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class = "col">
                                            <div class = "form-group">
                                                <?php echo $this->Form->control("Password *",['class'=>'form-control'])?>
                                            </div>
                                        </div>
                                        <div class = "col">
                                            <div class = "form-group">
                                                <?php echo $this->Form->control(" Confirm Password *",['class'=>'form-control'])?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class = "row">
                                        <div class = "col">
                                            <div class = "form-group">
                                                <?php echo $this->Form->control("Role",['class'=>'form-control'])?>
                                            </div>
                                        </div>
                                        <div class = "col">

                                        </div>

                                    </div>
                                  <div class = "row">
                                      <div class = "col">
                                    <div class = "form-group">
                                        <?php echo $this->Form->submit('Register',['class'=>'btn btn-primary']);?>
                                    </div>
                                      </div>
                                    <?php echo $this->Form->end();?>
                                  </div>


                                </div>
                </div>

        </div>
        </div>

    </div>

</div>
