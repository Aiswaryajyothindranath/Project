<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Invoice | Invoice</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     
   
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

  
    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url();?>assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Product Invoice App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    
       
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/welcome/form" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/welcome/view_products" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Products</p>
                </a>
              </li>
          
            </ul>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/welcome/discount" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Discount               
              </p>
            </a>
          </li> 
         <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/welcome/invoice" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Invoice               
              </p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php if($count!=0)
{?>
    <section class="content" id="printableArea">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> 
                    <small class="float-right">Date:<?php echo date("Y/m/d");?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
               
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> <?php echo date("Y/m/d", strtotime("+10 days"));?><br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row" >
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Unit Price</th>
                      <th>Total Price</th>
                      
                    </tr>
                    </thead>
                    <tbody>
<?php $total=0;?>
          <?php foreach($data as $note): ?>
            <?php $total=$total+($note->unit_price*$note->quantity);
               
                  ?>
                    <tr>
                      <td> <?php echo $note->quantity; ?></td>
                      <td> <?php echo $note->name; ?></td>
                      <td> <?php echo $note->unit_price; ?></td>
                     
                      <td> <?php echo $note->unit_price*$note->quantity; ?></td>
                    </tr>
          <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

                 <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  
                 
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due : <?php echo date("Y/m/d", strtotime("+10 days"));?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?php echo $total;?></td>
                      </tr>
                      <tr>
                        <th>Tax (%)</th>
                        <td><?php echo $discount['tax'];?>%    (<?php echo ($total* $discount['tax'])/100;?>)</td>
                      </tr>
                         <tr>
                        <th>Subtotal with Tax</th>
                        <td><?php echo $total+(($total* $discount['tax'])/100);?></td>
                      </tr>
                        <tr>
                        <th>Discount</th>
                        <td><?php echo $discount['value'];?><?php echo "(".($discount['discount_mode']).")"?></td>
                      </tr>

                      <tr>
                        <th>Total:</th>
                        <td>
                          <?php 
                          $total_amount=$total+(($total* $discount['tax'])/100);
                          if ($discount['discount_mode']=='flat'){
                            echo (($total_amount)-$discount['value']);
                          }
                          else
                          {
                            $val=$total_amount*$discount['value']/100;
                             echo (($total_amount)-$val);

                          }?>
                         </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <!-- <a href="<?php echo base_url()?>index.php/welcome/invoice_print" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <input type="button" onclick="printDiv('printableArea')" value="Print Invoice" />
                  
                  
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <?php }else{?>
     <section class="content" id="printableArea">
      NO PRODUCTS FOUND!!!!!!!!!!!!
     </section>
   <?php }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong></strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets');?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets');?>/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets');?>/js/demo.js"></script>

<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
</body>
</html>
