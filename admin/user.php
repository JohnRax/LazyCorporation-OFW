  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                <?php echo remove_user(); ?>
                    <div class="col-lg-12">
                        <h1 class="page-header">User</h1>
                    </div>
                        <table class="table table-bordered table-hover">
                        <thead>
                            <tr>     
                                <th></th> 
                                               
                                <th>Id</th> 
                                <th>Username</th>  
                                <th>Email</th> 
                                <th>Role</th> 
                                            
                            </tr>
                        </thead>
                        <tbody>   
                           <?php echo view_user(); ?>
                                                                                                                                                                           
                        </tbody>
                    </table>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
