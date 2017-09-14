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
                <a href="<?php echo base_url('category/add_category/');?>" class="btn btn-primary btn-sm">ADD CATEGORY</a>
                 
                
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                      <thead>       
                        <tr>
                          <th>No.</th>
                          <th>Category Code</th>
                          <th>Category Name</th>
                          <th>Actions</th>
                        </tr>
                      </thead>  
                      <tbody>
                        <tr>
                          <?php
                            $x=1;
                          if(!(isset($deleted) && $deleted==TRUE) ){  
                          foreach($category as $r){
                              echo '  <tr>  
                                    <td>'.$x.'</td>
                                    <td>'.$r['categoryNo'].'</td>
                                    <td>'.$r['categoryDesc'].'</td>
                                    
                                    <td>
                                      <a href="'; echo base_url('category/update_category/'.$r['categoryNo']); echo '" class="btn btn-success btn-sm">UPDATE</a>
                                      
                                      <button type="button" class="btn btn-danger btn-sm " onClick="deleteCategory('; echo $r['categoryNo']; echo')" > DELETE </button> 
                                      <a href="'; echo base_url('product/add_product/'.$r['categoryNo']); echo '" class="btn btn-primary btn-sm">ADD PRODUCT</a>
                                      
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
    <script type="text/javascript">
      function deleteCategory(id){
        var ans = confirm("Do you want to delete this record?");
        if(ans==true){
          //redirect to delete method
          var url="<?php echo base_url('category/delete_category/');?>";
          url= url + id;
          location.href = url;
          alert("The new category has been successfully deleted!");
        }
      }
    </script>
  
  <?php
if( isset($deleted) && $deleted==TRUE ){
?>
  <script type="text/javascript">
    location.href ='<?php echo base_url('category'); ?>';
  </script>
<?php
}
?>
