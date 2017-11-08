  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                <?php  echo remove_job(); 
                        echo approved_job();?>
                    <div class="col-lg-12">
                        <h1 class="page-header">Jobs</h1>
                    </div>
                   
                  
                     <table class="table table-bordered table-hover" >
                        <thead>
                        
                            <tr>   
                                <th></th> 
                                <th></th>                  
                                <th>Status</th>
                                <th>Id</th> 
                                <th>Post By</th>  
                                <th>Title</th> 
                                <th>Country</th> 
                                <th>Location</th> 
                                <th>Type</th> 
                                <th>Category</th> 
                                <th>Description</th> 
                                <th>Working Status</th> 
                                <th>Main Duties</th> 
                                <th>Cooking Skills</th> 
                                <th>Other Skills</th> 
                                <th>Required Languages</th> 
                                <th>Application Email</th> 
                                <th>Employer Email</th> 
                                <th>Nationality</th> 
                                <th>Family Type</th> 
                                <th>Start Date</th> 
                                <th>Monthly Salary</th> 
                                            
                            </tr>
                        </thead>
                        <tbody >   
                           <?php echo view_jobs(); ?>
                              
                                                                                                                                                                        
                        </tbody>
                    </table>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
