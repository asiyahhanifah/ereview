<section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Create a new task</h2>
          <p data-aos="fade-in">Let's create new task to review your article!</p>
          
        </div>
        <p> </p>
          <p> </p>
<center><div class="col-lg-4 box featured" data-aos="zoom-in">
         
                    <h5 class="title-a">
                      
                    </h5>
                    <p class="subtitle-a">
                        
                

                  <?php echo validation_errors("<p class='bg-danger'>"); ?>
                  <div class="d-flex justify-content-md-center">
                            <?php $attributes = array('id'=>'create_new_task', 'class'=> 'form_horizontal'); ?>
                            <?php echo form_open_multipart('editor/create/' . $profile_data->id . " ", $attributes);?>

                            <div class="form-group">
                                <?php echo form_label('Title'); ?>
                                <?php $data = array(
                                    'class' => 'form-control',
                                    'name' => 'judul',
                                    'placeholder' => 'Enter Title',
                                    'value' => set_value('judul')
                                    );?>
                                <?php echo form_input($data); ?>
                            </div>

                            <div class="form-group">    
                            <?php echo form_label('Authors'); ?>
                            <?php
                            $data = array(
                                'class' => 'form-control',
                                'name' => 'authors',
                                'placeholder' => 'Enter Authors',
                                'value' => set_value('authors')
                                );
                            ?>
                            <?php echo form_input($data); ?>
                            </div>

                            <div class="form-group">    
                            <?php echo form_label('Keywords'); ?>
                            <?php
                            $data = array(
                                'class' => 'form-control',
                                'name' => 'keywords',
                                'placeholder' => 'Enter Keywords',
                                'value' => set_value('keywords')
                                );
                            ?>
                            <?php echo form_textarea($data); ?>
                            </div>

                            <div class="form-group">
                            <?php echo form_label('Paper File'); ?><br>
                            <?php echo $error;?>
                            <input type="file" name="userfile" size="20" />
                            </div>

                            <div class="form-group">
                            <label>Assign to a reviewer</label>
                            <select class="form-control" name="reviewer" id="reviewer" required>
                                <option value="">Nothing Selected</option>
                                <?php foreach($reviewer as $reviewers):?>
                                <option value="<?php echo $reviewers->id_reviewer;?>"><?php echo $reviewers->nama;?></option>
                                <?php endforeach;?>
                            </select>
                          </div>

                          <div class="form-group">
                          <?php echo form_label('Due Date'); ?><br>
                            <?php
                            $data = array(
                              'class' => 'form-control',
                                'name' => 'tgl_deadline',
                                'type' => 'date'
                              );
                            ?>
                            <?php echo form_input($data); ?>
                            </div>

                            <div class="form-group text-center">
                            <?php
                            $data = array(
                                'class' => 'btn btn-primary',
                                'name' => 'submit',
                                'value' => 'Create'
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

