<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Bank Account</h2>
          <p data-aos="fade-in">Your funds will be transferred into your bank account, make sure you get it correct</p>
          
        </div>
        <p> </p>
          <p> </p>
<center><div class="col-lg-4 box featured" data-aos="zoom-in">
         
                    <h5 class="title-a">
                      
                    </h5>
                    <p class="subtitle-a">
                        
                

                <p class="bg-success">
                  <?php if($this->session->flashdata('bank_updated')): ?>
                  <?php echo $this->session->flashdata('bank_updated'); ?>
                  <?php endif; ?>
                  </p>
                  
                  <div class="about-info text-center">
                      <p><span class="title-s">Bank Account: </span> <span><?php  echo $bank_account->no_rek; ?></span></p>
                      <a class="btn btn-primary" href="<?php echo base_url();?>users/edit_bank/<?php echo $user_id ?>">Edit Bank Account</a>
                  </div>
                    <div class="line-mf"></div>
                  </div></center>
          </div>
</div>
    </section>
