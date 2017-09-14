   <!--Menu-->
<div class="row">
  <div id="wrapper">
      <div id="sidebar-wrapper">
        <ul>
          <li><a href="<?php echo base_url('dashboard'); ?>"><span class="glyphicon glyphicon-home"></span>
          <span>&nbsp; Dashboard </span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> 
          <span>&nbsp; Inventory </span></a></li>
          <li><a href="<?php echo base_url('sales'); ?>"><span class="glyphicon glyphicon-signal"></span> 
          <span>&nbsp; Sales </span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> 
          <span>&nbsp; Order </span></a></li>
          <li><a href="<?php echo base_url('category'); ?>"><span class="glyphicon glyphicon-folder-open"></span> 
          <span>&nbsp; Category </span></a></li>
          <li><a href="<?php echo base_url('product'); ?>"><span class="glyphicon glyphicon-gift"></span> 
          <span>&nbsp; Products </span></a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-file"></span> <span>&nbsp; Reports </span>
            <span class="caret "></span></a>
              <ul class="dropdown-menu side-choice">
                  <li ><a href="<?php echo base_url('report/sales_report'); ?>"><span ></span> Sales Report</a></li>
                  <li ><a href="<?php echo base_url('report/inventory_report'); ?>"><span ></span> Inventory Report</a></li>
                  <li ><a href="<?php echo base_url('report/product_purchase'); ?>"><span ></span> Product Purchase</a></li>
              </ul>
          </li>
        </ul>
      </div>
  </div>
</div>

<!--
</div>
-->