<center><section id="services" class="services section-bg">
      <div class="container">

        <div class="row">
          <center><div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo base_url();?>assets/img/reviewer_logoo.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Hello Reviewer!</a></h5>
                <p class="card-text"> Here, you can evaluate editors' article submissions to journals based on the requirements of that journal, predefined criteria, and the quality, completeness and accuracy of the research presented. You can help prevent ethical breaches by identifying plagiarism, research fraud and other problems.</p>
            </div>
          </div></center>
        </div>
      </div>
    </section></center><!-- End Services Section -->

            <div class="col-sm-12 text-center">
                <a class="btn btn-primary btn-lg" href="<?php echo base_url()?>users/display_bank/<?php echo $user_id ?>" role="button">Your Bank Account</a>
                <a class="btn btn-primary btn-lg" href="<?php echo base_url()?>users/display_competence/<?php echo $user_id ?>" role="button">Your Competence</a>
                <a class="btn btn-primary btn-lg" href="<?php echo base_url()?>users/display_funds/<?php echo $user_id ?>" role="button">Deduct Funds</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-12">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                  <div class="title-box text-center">
                    <h5 class="title-a">
                      Task Pending Acceptance
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task that is assigned to you and is waiting your confirmation
                    </p>
                    <div class="line-mf"></div>
                  </div>
                  </div>

                  <p class="bg-success">
                  <?php if($this->session->flashdata('task_accepted')): ?>
                  <?php echo $this->session->flashdata('task_accepted'); ?>
                  <?php endif; ?>
                  </p>

                  <p class="bg-danger">
                  <?php if($this->session->flashdata('task_rejected')): ?>
                  <?php echo $this->session->flashdata('task_rejected'); ?>
                  <?php endif; ?>
                  </p>
                  
                  <div class="row">
            <table class="table table-hover table-primary">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Authors</th>
                  <th scope="col">Keywords</th>
                  <th scope="col">File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                  <th scope="col">Accept</th>
                  <th scope="col">Reject</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if($task_pending_acceptance): ?>
                  <?php foreach($task_pending_acceptance as $task): ?>
                    <tr>
                        <td><?php echo $task->judul; ?></td>
                        <td><?php echo $task->authors; ?></td>
                        <td><?php echo $task->keywords; ?></td>
                        <td><a href="<?php echo base_url();?>users/download/<?php echo $task->file_loc;?>.pdf">Click to download</a></td>
                        <td><?php echo $task->nama_editor; ?></td>
                        <td><?php echo $task->tgl_assign; ?></td>
                        <td><?php echo $task->tgl_deadline; ?></td>
                        <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>reviewer/accept/<?php echo $task->id_task;?>">Accept</a></td>
                        <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>reviewer/reject/<?php echo $task->id_task;?>">Reject</a></td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                        <td>You have no tasks here</td>
                </tr>
                <?php endif; ?>
                </tr>
              </tbody>
            </table>
        </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-12">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                  <div class="title-box text-center">
                    <h5 class="title-a">
                      Task In Progress
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task that you accept and needs to be finished
                    </p>
                    <div class="line-mf"></div>
                  </div>
                  </div>

                  <div class="row">
            <table class="table table-hover table-primary">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Authors</th>
                  <th scope="col">Keywords</th>
                  <th scope="col">Your File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                  <th scope="col">Submit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if($task_assigned): ?>
                  <?php foreach($task_assigned as $task): ?>
                    <tr>
                        <td><?php echo $task->judul; ?></td>
                        <td><?php echo $task->authors; ?></td>
                        <td><?php echo $task->keywords; ?></td>
                        <td><a href="<?php echo base_url();?>users/download/<?php echo $task->file_loc;?>.pdf">Click to download</a></td>
                        <td><?php echo $task->nama_editor; ?></td>
                        <td><?php echo $task->tgl_assign; ?></td>
                        <td><?php echo $task->tgl_deadline; ?></td>
                        <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>reviewer/submit/<?php echo $task->id_task;?>">Submit</a></td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                        <td>You have no tasks here</td>
                </tr>
                <?php endif; ?>
                </tr>
              </tbody>
            </table>
        </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-12">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                  <div class="title-box text-center">
                    <h5 class="title-a">
                      Task Pending Finished
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task that you marked as finished and is waiting for admin's confirmation 
                    </p>
                    <div class="line-mf"></div>
                  </div>
                  </div>

                  <div class="row">
            <table class="table table-hover table-primary">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Authors</th>
                  <th scope="col">Keywords</th>
                  <th scope="col">Your File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if($task_pending_finished): ?>
                  <?php foreach($task_pending_finished as $task): ?>
                    <tr>
                        <td><?php echo $task->judul; ?></td>
                        <td><?php echo $task->authors; ?></td>
                        <td><?php echo $task->keywords; ?></td>
                        <td><a href="<?php echo base_url();?>users/download/<?php echo $task->file_loc;?>.pdf">Click to download</a></td>
                        <td><?php echo $task->nama_editor; ?></td>
                        <td><?php echo $task->tgl_assign; ?></td>
                        <td><?php echo $task->tgl_deadline; ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                        <td>You have no tasks here</td>
                </tr>
                <?php endif; ?>
                </tr>
              </tbody>
            </table>
        </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-12">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                  <div class="title-box text-center">
                    <h5 class="title-a">
                      Task Pending Confirmation Finished
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task that is you marked finished and is awaiting editor's confirmation
                    </p>
                    <div class="line-mf"></div>
                  </div>
                  </div>

                  <div class="row">
            <table class="table table-hover table-primary">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Authors</th>
                  <th scope="col">Keywords</th>
                  <th scope="col">Your File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if($task_confirm_finished): ?>
                  <?php foreach($task_confirm_finished as $task): ?>
                    <tr>
                        <td><?php echo $task->judul; ?></td>
                        <td><?php echo $task->authors; ?></td>
                        <td><?php echo $task->keywords; ?></td>
                        <td><a href="<?php echo base_url();?>users/download/<?php echo $task->file_loc;?>.pdf">Click to download</a></td>
                        <td><?php echo $task->nama_editor; ?></td>
                        <td><?php echo $task->tgl_assign; ?></td>
                        <td><?php echo $task->tgl_deadline; ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                        <td>You have no tasks here</td>
                </tr>
                <?php endif; ?>
                </tr>
              </tbody>
            </table>
        </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-12">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                  <div class="title-box text-center">
                    <h5 class="title-a">
                      Task Finished
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are all the task that you have finished
                    </p>
                    <div class="line-mf"></div>
                  </div>
                  </div>

                  <div class="row">
            <table class="table table-hover table-primary">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Authors</th>
                  <th scope="col">Keywords</th>
                  <th scope="col">Your File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if($task_finished): ?>
                  <?php foreach($task_finished as $task): ?>
                    <tr>
                        <td><?php echo $task->judul; ?></td>
                        <td><?php echo $task->authors; ?></td>
                        <td><?php echo $task->keywords; ?></td>
                        <td><a href="<?php echo base_url();?>users/download/<?php echo $task->file_loc;?>.pdf">Click to download</a></td>
                        <td><?php echo $task->nama_editor; ?></td>
                        <td><?php echo $task->tgl_assign; ?></td>
                        <td><?php echo $task->tgl_deadline; ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                        <td>You have no tasks here</td>
                </tr>
                <?php endif; ?>
                </tr>
              </tbody>
            </table>
        </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>