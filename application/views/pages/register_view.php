<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Register Form</h2>
          <p data-aos="fade-in">One last step to enjoy a freedom of knowledge</p>
          
        </div>
        <p> </p>
          <p> </p>
<center><div class="col-lg-4 box featured" data-aos="zoom-in">
         
<h5 class="title-a">
                      
                    </h5>
                    <p class="subtitle-a">
                        
                    
                    <div class="line-mf"></div>
                  
                  <?php echo validation_errors("<p class='bg-danger'>"); ?>
                  <div class="d-flex justify-content-md-center">
                            <?php $attributes = array('id'=>'register_form', 'class'=> 'form_horizontal'); ?>
                            <?php echo form_open('users/register', $attributes);?>

                            <div class="form-group">
                                <?php echo form_label('Name'); ?>
                                <?php $data = array(
                                    'class' => 'form-control',
                                    'name' => 'nama',
                                    'placeholder' => 'Name',
                                    'value' => set_value('nama')
                                    );?>
                                <?php echo form_input($data); ?>
                            </div>

                            <div class="form-group">  
                            <?php echo form_label('Email'); ?>
                            <?php
                            $data = array(
                                'class' => 'form-control',
                                'name' => 'email',
                                'placeholder' => 'Enter Your Email',
                                'value' => set_value('email')
                                );
                            ?>
                            <?php echo form_input($data); ?>
                            </div>

                            <div class="form-group">  
                            <?php echo form_label('Username'); ?>
                            <?php
                            $data = array(
                                'class' => 'form-control',
                                'name' => 'username',
                                'placeholder' => 'Enter Username',
                                'value' => set_value('username')
                                );
                            ?>

                            <?php echo form_input($data); ?>
                            </div>

                            <div class="form-group">
                            <?php echo form_label('Password'); ?>
                            <?php
                            $data = array(
                                'class' => 'form-control',
                                'name' => 'password',
                                'placeholder' => 'Enter Password'
                                );
                            ?>
                            <?php echo form_password($data); ?>
                            </div>

                            <div class="form-group">  
                            <?php echo form_label('Confirm Password'); ?>
                            <?php
                            $data = array(
                                'class' => 'form-control',
                                'name' => 'confirm_password',
                                'placeholder' => 'Confirm Password'
                                );
                            ?>
                            <?php echo form_password($data); ?>
                            </div>

                            <div class="form-group">  
                            <?php echo form_label('Pick Your Role'); ?>
                            <?php
                            $options = array(
                                    '1'         => 'Editor',
                                    '2'         => 'Reviewer'
                                );
                            ?>
                            <?php echo form_dropdown('peran', $options); ?>
                            </div>

                            <div class="form-group text-center">
                            <?php
                            $data = array(
                                'class' => 'btn btn-primary',
                                'name' => 'submit',
                                'value' => 'Register'
                                );
                            ?>
                            <?php echo form_submit($data); ?>
                            </div>

                            <?php echo form_close();?>
                    </div>
                    </p>
                    <div class="line-mf"></div>
                  </div></center>
          </div>
</div>
    </section>