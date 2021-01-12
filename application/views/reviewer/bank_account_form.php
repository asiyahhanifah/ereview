<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Bank Account</h2>
          <p data-aos="fade-in">Here your Bank Account!</p>
          
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
                            <?php echo form_open_multipart('users/edit_bank/' . $profile_data->id . '', $attributes);?>

                            <div class="form-group">
                                <?php echo form_label('Bank Account'); ?>
                                <?php
                                $data = array(
                                    'class' => 'form-control',
                                    'name' => 'no_rek',
                                    'value' => $bank_account->no_rek
                                    );
                                ?>
                                <?php echo form_input($data); ?>
                                </div>

                                <div class="form-group">
                                <?php
                                $data = array(
                                    'class' => 'btn btn-primary',
                                    'name' => 'submit',
                                    'value' => 'Update'
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
