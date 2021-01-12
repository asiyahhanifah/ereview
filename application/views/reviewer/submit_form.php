<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Submit Paper</h2>
          <p data-aos="fade-in"></p>
          
        </div>
        <p> </p>
          <p> </p>
          <center><div class="col-lg-4 box featured" data-aos="zoom-in">
         
                    <h5 class="title-a">
                      
                    </h5>
                    <p class="subtitle-a">
                        
                
<?php echo validation_errors("<p class='bg-danger'>"); ?>
                  <div class="d-flex justify-content-md-center">
                            <?php $attributes = array('id'=>'register_form', 'class'=> 'form_horizontal'); ?>
                            <?php echo form_open_multipart('reviewer/submit/' . $task_id . " ", $attributes);?>

                            <div class="form-group">
                                <?php echo form_label('Message'); ?>
                                <?php $data = array(
                                    'class' => 'form-control',
                                    'name' => 'message',
                                    'placeholder' => 'Enter Message',
                                    'value' => set_value('message')
                                    );?>
                                <?php echo form_input($data); ?>
                            </div>

                            <div class="form-group">
                            <?php echo form_label('Paper'); ?><br>
                            <?php echo $error;?>
                            <input type="file" name="userfile" size="20" />
                            </div>

                            <div class="form-group text-center">
                            <?php
                            $data = array(
                                'class' => 'btn btn-primary',
                                'name' => 'submit',
                                'value' => 'Submit Paper'
                                );
                            ?>
                            <?php echo form_submit($data); ?>
                            </div>

                            <?php echo form_close();?>
                    </div>
                </div>
                    <div class="line-mf"></div>
                  </div></center>
          </div>
</div>
    </section>

