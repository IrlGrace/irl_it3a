<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>	

	<div class="row">
    <div id=wrapper>
      <?php include 'includes/menu.php';?>
    </div>
    <div class="row">
      <div id="content">
        <div id="main-content">
          <div class="col-md-11">
            <div class="thumbnail">
              <div class="row">
                <div class="col-md-9">
                  <h2>List of Inventory</h2>
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered table-striped">
                        <thead>       
                          <tr>
                            <th>Product ID</th>
                            <th>Product Description</th>
                            <th>Category ID</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>                                                          
                      </table>  
                    </div>                
                </div>            
                <div class="col-md-3">
                  <h2>Add Product</h2>
                    <form>
                      <div class="form-group">
                        <label> Product ID: </label>
                        <input type="text" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label> Product Description: </label>
                        <input type="text" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label> Category ID: </label>
                        <input type="text" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label> Quantity: </label>
                        <input type="text" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label> Price: </label>
                        <input type="text" class="form-control" />
                      </div>

                      <div class="pull-right">
                        <button type="submit" class="'btn btn-default"> Submit </button> 
                      </div>

                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include 'includes/footer.php'; ?>	