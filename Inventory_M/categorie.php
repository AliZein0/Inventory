<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
     </div>
  </div>
   <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Add New Category</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="categorie.php">
            <div class="form-group">
                <input type="text" class="form-control" name="categorie-name" placeholder="Category Name">
            </div>
            <button type="submit" name="add_cat" class="btn btn-primary">Add Category</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>All Categories</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Categories</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
            </thead>
           
            </tbody>
          </table>
       </div>
    </div>
    </div>
   </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
