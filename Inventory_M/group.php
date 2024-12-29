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
        <span>Groups</span>
     </strong>
       <a href="add_group.php" class="btn btn-info pull-right btn-sm"> Add New Group</a>
    </div>
     <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Group Name</th>
            <th class="text-center" style="width: 20%;">Group Level</th>
            <th class="text-center" style="width: 15%;">Status</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <td class="text-center"></td>
           <td></td>
           <td class="text-center">
           </td>
           <td class="text-center">
            <span class="label label-success"><?php echo "Active"; ?></span>
        
            <span class="label label-danger"><?php echo "Deactive"; ?></span>
           </td>
           <td class="text-center">
             <div class="btn-group">
               
                  <i class="glyphicon glyphicon-pencil"></i>
               </a>
                  <i class="glyphicon glyphicon-remove"></i>
                </a>
                </div>
           </td>
          </tr>

       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>
  <?php include_once('layouts/footer.php'); ?>