  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Candidate</h1>
                    </div>
                       <table class="table table-bordered table-hover">
                        <thead>
                            <tr>                     
                                <th>ID</th> 
                                <th>LAST NAME</th>  
                                <th>FIRST NAME</th> 
                                <th>GENDER</th>  
                                <th>AGE</th> 
                                <th>MARITAL STATUS</th> 
                                <th>CHILDREN</th> 
                                <th>LANGUAGE</th> 
                                <th>JOB</th> 
                                <th>EMAIL</th> 
                                <th>MOBILE</th> 
                                <th>TELEPHONE</th> 
                                <th>NATIONALITY</th> 
                                <th>ADDRESS</th> 
                               
                                  
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
