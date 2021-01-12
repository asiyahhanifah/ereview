<center><section id="services" class="services section-bg">
      <div class="container">

        <div class="row">
          <center><div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo base_url();?>assets/img/makelaar_logoo.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Hello Makelaar!</a></h5>
                <p class="card-text"> You are here to arrange transactions between editors and reviewers for a commission when the deal is executed. You also acts as a seller or as a buyer becomes a principal party to the deal.</p>
            </div>
          </div></center>
        </div>
      </div>
    </section></center><!-- End Services Section -->




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
                      Task Pending Payment
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task that need to be  by editor
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
                  <th scope="col">File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Nama Reviewer</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if($task_pending_payment): ?>
                  <?php foreach($task_pending_payment as $task): ?>
                    <tr>
                        <td><?php echo $task->judul; ?></td>
                        <td><?php echo $task->authors; ?></td>
                        <td><?php echo $task->keywords; ?></td>
                        <td><a href="<?php echo base_url();?>users/download/<?php echo $task->file_loc;?>.pdf">Click to download</a></td>
                        <td><?php echo $task->nama_editor; ?></td>
                        <td><?php echo $task->nama_reviewer; ?></td>
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
                      Task Pending Confirm Pay
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task that are paid and is waiting for your confirmation
                    </p>
                    <div class="line-mf"></div>
                  </div>
                  </div>

                  <p class="bg-success">
                  <?php if($this->session->flashdata('payment_accepted')): ?>
                  <?php echo $this->session->flashdata('payment_accepted'); ?>
                  <?php endif; ?>
                  
                  <?php if($this->session->flashdata('payment_rejected')): ?>
                  <?php echo $this->session->flashdata('payment_rejected'); ?>
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
                  <th scope="col">Nama Reviewer</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                  <th scope="col">Proof of Payment</th>
                  <th scope="col">Accept</th>
                  <th scope="col">Reject</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if($task_pending_confirm_pay): ?>
                  <?php foreach($task_pending_confirm_pay as $task): ?>
                    <tr>
                        <td><?php echo $task->judul; ?></td>
                        <td><?php echo $task->authors; ?></td>
                        <td><?php echo $task->keywords; ?></td>
                        <td><a href="<?php echo base_url();?>users/download/<?php echo $task->file_loc;?>.pdf">Click to download</a></td>
                        <td><?php echo $task->nama_editor; ?></td>
                        <td><?php echo $task->nama_reviewer; ?></td>
                        <td><?php echo $task->tgl_assign; ?></td>
                        <td><?php echo $task->tgl_deadline; ?></td>
                        <td><a href="<?php echo base_url();?>makelaar/download/<?php echo $task->id_task;?>">Click to download</a></td>
                        <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>makelaar/accept_payment/<?php echo $task->id_task;?>">Accept</a></td>
                        <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>makelaar/reject_payment/<?php echo $task->id_task;?>">Reject</a></td>
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
                      Task Pending Acceptance
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task that are waiting for reviewer's acceptance
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
                  <th scope="col">File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Nama Reviewer</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
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
                        <td><?php echo $task->nama_reviewer; ?></td>
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
                      Task Assigned
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task are assigned to an Reviewer
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
                  <th scope="col">File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Nama Reviewer</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
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
                        <td><?php echo $task->nama_reviewer; ?></td>
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
                      Task Rejected
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task are rejected by the reviewer
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
                  <th scope="col">File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Nama Reviewer</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if($task_rejected): ?>
                  <?php foreach($task_rejected as $task): ?>
                    <tr>
                        <td><?php echo $task->judul; ?></td>
                        <td><?php echo $task->authors; ?></td>
                        <td><?php echo $task->keywords; ?></td>
                        <td><a href="<?php echo base_url();?>users/download/<?php echo $task->file_loc;?>.pdf">Click to download</a></td>
                        <td><?php echo $task->nama_editor; ?></td>
                        <td><?php echo $task->nama_reviewer; ?></td>
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
                      Task Pending Finished confirmation
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task that is marked finished and is waiting your confirmation
                    </p>
                    <div class="line-mf"></div>
                  </div>
                  </div>

                  <p class="bg-success">
                  <?php if($this->session->flashdata('finished_accepted')): ?>
                  <?php echo $this->session->flashdata('finished_accepted'); ?>
                  <?php endif; ?>
                  
                  <?php if($this->session->flashdata('finished_rejected')): ?>
                  <?php echo $this->session->flashdata('finished_rejected'); ?>
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
                  <th scope="col">Nama Reviewer</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                  <th scope="col">Accept</th>
                  <th scope="col">Reject</th>
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
                        <td><?php echo $task->nama_reviewer; ?></td>
                        <td><?php echo $task->tgl_assign; ?></td>
                        <td><?php echo $task->tgl_deadline; ?></td>
                        <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>makelaar/accept_finished/<?php echo $task->id_task;?>">Accept</a></td>
                        <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>makelaar/reject_finished/<?php echo $task->id_task;?>">Reject</a></td>
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
                      Task Confirm Finished
                    </h5>
                    <p class="subtitle-a">
                        Task in this list are task are awaiting editor's confirmation 
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
                  <th scope="col">File</th>
                  <th scope="col">Nama Editor</th>
                  <th scope="col">Nama Reviewer</th>
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
                        <td><?php echo $task->nama_reviewer; ?></td>
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
                        Task in this list are task are finished
                    </p>
                    <div class="line-mf"></div>
                  </div>
                  </div>

                  <p class="bg-success">
                  <?php if($this->session->flashdata('funds_sent')): ?>
                  <?php echo $this->session->flashdata('funds_sent'); ?>
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
                  <th scope="col">Nama Reviewer</th>
                  <th scope="col">Assign Date</th>
                  <th scope="col">Due Date</th>
                  <th scope="col">Send Funds</th>
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
                        <td><?php echo $task->nama_reviewer; ?></td>
                        <td><?php echo $task->tgl_assign; ?></td>
                        <td><?php echo $task->tgl_deadline; ?></td>
                        <td><a class="btn btn-primary btn-sm" href="<?php echo base_url()?>makelaar/send_funds/<?php echo $task->id_reviewer ?>" role="button">Send Funds</a></td>
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

