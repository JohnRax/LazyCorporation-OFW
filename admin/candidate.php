  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Candidate</h1>
                    </div>
                       <table class="table table-bordered table-hover">
                        <thead>
                            <tr>          
                                <th></th>            
                                <th>ID</th>      
                                <th>Full Name</th> 
                                <th>Gender</th>  
                                <th>Age</th> 
                                <th>Marital Status</th> 
                                <th>Children</th> 
                                <th>Language</th> 
                                <th>Job</th> 
                                <th>Email</th> 
                                <th>Mobile</th> 
                                <th>Telephone</th> 
                                <th>Nationality</th> 
                                <th>Address</th>     
                            </tr>
                        </thead>
                        <tbody>   
                           <?php 

                                echo view_candidate();
                            ?>  
                        </tbody>
                       


                    </table>


                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
