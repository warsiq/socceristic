<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/layout.php');
include('config/dbcon.php');

?>      

      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customer's Login</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>customer name</th>
                      <th>Date</th>
                      <th>Email</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM cust_login";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $row)
                        {
                          ?>
                          <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['password'];?></td>
                          
                        </tr>
                          <?php

                        }
                    }
                    else
                    {
                     ?>
                     <tr>
                      <td>No Record Found</td>
                     </tr>
                     <?php
                    }
                    ?>

                                     </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</div>

      