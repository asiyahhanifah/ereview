<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Login Form</h2>
          <p data-aos="fade-in">We are glad to see you back</p>
          
        </div>
        <p> </p>
          <p> </p>
<center><div class="col-lg-4 box featured" data-aos="zoom-in">
         
                    <h5 class="title-a">
                      
                    </h5>
                    <p class="subtitle-a">
                        
                

                  <p class="bg-success">
                  <?php if($this->session->flashdata('login_success')): ?>
                  <?php echo $this->session->flashdata('login_success'); ?>
                  <?php endif; ?>

                  <?php if($this->session->flashdata('user_registered')): ?>
                  <?php echo $this->session->flashdata('user_registered'); ?>
                  <?php endif; ?>
                  </p>

                  <?php echo validation_errors("<p class='bg-danger'>"); ?>

                  <p class="bg-danger">
                  <?php if($this->session->flashdata('login_failed')): ?>
                  <?php echo $this->session->flashdata('login_failed'); ?>
                  <?php endif; ?>
                  </p>

                  <div class="d-flex justify-content-md-center">
                            <?php $attributes = array('id'=>'register_form', 'class'=> 'form_horizontal'); ?>
                            <?php echo form_open('users/login', $attributes);?>

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

                            <div class="form-group text-center">
                            <?php
                            $data = array(
                                'class' => 'btn btn-primary',
                                'name' => 'submit',
                                'value' => 'Login'
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