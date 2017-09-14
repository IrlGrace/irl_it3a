<div class="row">
    <div id="content">
      <div id="main-content">
        <div class="col-md-11">
          <div class="thumbnail">
              <div class="row">
              <div class="col-md-8">
               <h2><?php echo $title; ?></h2> 
              </div>
              <div class="col-md-2 pull-right">
                <a href="<?php echo base_url('product/add_product/null');?>" class="btn btn-primary btn-sm">ADD PRODUCT</a>
                 
                
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                      <thead>       
                        <tr>
                          <th>No.</th>
                          <th>Product ID</th>
                          <th>Product Description</th>
                          <th>Category ID</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>  
                      <tbody>
                        <tr>
                          <?php
                            $x=1;

                           
                          if(!(isset($deleted) && $deleted==TRUE) ){  
                          foreach($product as $p){
                              echo '  <tr>  
                                    <td>'.$x.'</td>
                                    <td>'.$p['productID'].'</td>
                                    <td>'.$p['productDesc'].'</td>
                                    <td>'.$p['categoryID'].'</td>
                                    <td>'.$p['quantity'].'</td>
                                    <td>'.$p['price'].'</td>
                                    <td>
                                      <a href="#" class="btn btn-success btn-sm">UPDATE</a>
                                      <button type="button" class="btn btn-danger btn-sm " onClick="" > DELETE </button> 
                                    
                                      
                                    </td>
                                  </tr>
                                  ';
                                  $x++;
                            }
                            }
                          ?>
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
