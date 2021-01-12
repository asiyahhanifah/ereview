<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Your Funds</h2>
          <p data-aos="fade-in">You can only transfer funds with the same or lower value that your avalailable funds</p>
          
        </div>
        <p> </p>
          <p> </p>
          <center><div class="col-lg-4 box featured" data-aos="zoom-in">
         
                    <h5 class="title-a">
                      
                    </h5>
                    <p class="subtitle-a">
                        
                

                  <p class="bg-success">
                  <?php if($this->session->flashdata('funds_deducted')): ?>
                  <?php echo $this->session->flashdata('funds_deducted'); ?>
                  <?php endif; ?>
                  </p>
                  
                  <div class="about-info text-center">
                      <p><span class="title-s">Available Funds: </span> <span><?php  echo $funds->funds; ?></span></p>
                      <a class="btn btn-primary" href="<?php echo base_url()?>reviewer/deduct_funds/<?php echo $user_id ?>" role="button">Deduct Funds</a>
                  </div>
                    
                </div>
                    <div class="line-mf"></div>
                  </div></center>
          </div>
</div>
    </section>
