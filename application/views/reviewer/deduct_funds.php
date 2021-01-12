<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Deduct Funds</h2>
          <p data-aos="fade-in"> </p>
          
        </div>
        <p> </p>
          <p> </p>
          <center><div class="col-lg-4 box featured" data-aos="zoom-in">
         
                    <h5 class="title-a">
                      
                    </h5>
                    <p class="subtitle-a">
                        
                

                  <p class="bg-danger">
                  <?php if($this->session->flashdata('funds_higher')): ?>
                  <?php echo $this->session->flashdata('funds_higher'); ?>
                  <?php endif; ?>
                  </p>

                  <?php echo validation_errors("<p class='bg-danger'>"); ?>
                  <div class="d-flex justify-content-md-center">
                            <?php $attributes = array('id'=>'create_new_task', 'class'=> 'form_horizontal'); ?>
                            <?php echo form_open_multipart('reviewer/deduct_funds/' . $id_reviewer . " ", $attributes);?>

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

                            <div class="form-group text-center">
                            <?php
                            $data = array(
                                'class' => 'btn btn-primary',
                                'name' => 'submit',
                                'value' => 'Deduct Funds'
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



