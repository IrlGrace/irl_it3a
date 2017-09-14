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
                <a href="<?php if(isset($cid)){echo base_url('category');}
                               else{echo base_url('product');}
                ?>" class="btn btn-primary btn-sm">BACK</a>
              </div>
            </div>
            <div class="row"> 
              <div class="col-md-6">
                  <form role="form" method="post">
                  <div class="text-danger">
                    <?php
                      if(isset($errors)){
                          echo validation_errors(); 
                      }
                    ?>
                    </div>
<!--                 <div class="form-group">
                      <label for="productID"> Product ID: </label>
                      <input type="text" class="form-control" id="productID" name="productID" />
                    </div>
-->
                    <div class="form-group">
                      <label for="productDesc"> Product Description: </label>
                      <input type="text" class="form-control" id="productDesc" name="productDesc" />
                    </div>

                    <div class="form-group">
                      <label for="categoryID">Category ID:</label>
                      <select class="form-control" id="categoryID" name="categoryID">
                        <?php if(isset($cid)){
                               echo ' <option>'.$cid.'</option>';
                              }else{
                                foreach($category as $c){
                                    echo '<option>'.$c['categoryNo'].
                                    '</option>';
                                }
                              }
                        ?>
                      </select>
                    </div> 


                    <div class="form-group">
                      <label for="quantity"> Quantity: </label>
                      <input type="text" class="form-control" id="quantity" name="quantity" />
                    </div>

                    <div class="form-group">
                      <label for="price"> Price: </label>
                      <input type="text" class="form-control" id="price" name="price" />
                    </div>

                    <div class="form-group pull-right">
                      <button type="submit" class="btn btn-success">
                        Submit <span class="glyphicon glyphicon-save"></span> 
                      </button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
<?php
if( isset($added) && $added==TRUE ){
?>
  <script type="text/javascript">
    alert("The new product has been successfully added!");
    location.href = '<?php echo base_url('product'); ?>';
  </script>
<?php
}

if( isset($changed) && $changed==TRUE ){
?>
  <script type="text/javascript">
    alert("The new category has been successfully changed!");
    location.href = '<?php echo base_url('category'); ?>';
  </script>
<?php
}

if( isset($duplicate) && $duplicate==TRUE ){
?>
  <script type="text/javascript">
    alert("The category already exist!");
    location.href = '<?php echo base_url('category'); ?>';
  </script>
<?php
}

if( isset($updated) && $updated==TRUE ){
?>
  <script type="text/javascript">
    alert("The category successfully updated!");
    location.href = '<?php echo base_url('category'); ?>';
  </script>
<?php
}
?>