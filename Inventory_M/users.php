<?php include_once('layouts/header.php'); ?>
<div class="row">
   <div class="col-md-12">
   </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Users</span>
       </strong>
         <a href="add_user.php" class="btn btn-info pull-right">Add New User</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name </th>
            <th>Username</th>
            <th class="text-center" style="width: 15%;">User Role</th>
            <th class="text-center" style="width: 10%;">Status</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
        
       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>
  <?php include_once('layouts/footer.php'); ?>
