<div class="box box-info">
    <div class="box-header">
        <i class="fa fa-envelope"></i>

        <h3 class="box-title">Email</h3>
        <!-- tools box -->

        <!-- /. tools -->
    </div>
    <div class="box-body">
        <form action="#" method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="emailto" placeholder="Email to:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
            </div>
            <div>
              <textarea class="textarea" placeholder="Message"
                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
        </form>
    </div>
    <div class="box-footer clearfix">
        <?php echo $this->Form->submit('Email',['class'=>'btn btn-primary']);?>
    </div>
    <?php echo $this->Form->end();?>
</div>
