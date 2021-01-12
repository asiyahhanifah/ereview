<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Commit Payment</h2>
          <p data-aos="fade-in">Let's commit your payment to review your article!</p>
          
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
                            <?php echo form_open_multipart('editor/pay/' . $task_id . " ", $attributes);?>

                            <div class="form-group">
                                <?php echo form_label('The Price is 100000 IDR / pages'); ?>
                            </div>

                            <div class="form-group">
                                <?php echo form_label('Please pay accordingly'); ?>
                            </div>

                            <div class="form-group">
                                <?php echo form_label('Amount'); ?>
                                <?php $data = array(
                                    'class' => 'form-control',
                                    'name' => 'amount',
                                    'placeholder' => 'Enter Amount',
                                    'value' => set_value('amount')
                                    );?>
                                <?php echo form_input($data); ?>
                            </div>

                            <div class="form-group">
                            <?php echo form_label('Proof of Payment'); ?><br>
                            <?php echo $error;?>
                            <input type="file" name="userfile" size="20" />
                            </div>

                            <div class="form-group text-center">
                            <?php
                            $data = array(
                                'class' => 'btn btn-primary',
                                'name' => 'submit',
                                'value' => 'Submit Proof'
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


