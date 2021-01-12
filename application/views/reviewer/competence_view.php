<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Competence</h2>
          <p data-aos="fade-in">Your competence will determined what fields of science you have mastered</p>
          
        </div>
        <p> </p>
          <p> </p>
          <center><div class="col-lg-4 box featured" data-aos="zoom-in">
         
                    <h5 class="title-a">
                      
                    </h5>
                    <p class="subtitle-a">
                        
                

<p class="bg-success">
                  <?php if($this->session->flashdata('competence_updated')): ?>
                  <?php echo $this->session->flashdata('competence_updated'); ?>
                  <?php endif; ?>
                  </p>
                  
                  <div class="about-info text-center">
                      <p><span class="title-s">Competence: </span> <span><?php  echo $competence->kompetensi; ?></span></p>
                      <a class="btn btn-primary" href="<?php echo base_url();?>users/edit_competence/<?php echo $user_id ?>">Edit Competence</a>
                  </div>
                    
                </div>
                    <div class="line-mf"></div>
                  </div></center>
          </div>
</div>
    </section>


