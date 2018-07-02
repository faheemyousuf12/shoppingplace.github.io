<style>
body {
  padding-top: 50px;
}

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

.navbar-fixed-top {
  border: 0;
}

.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; 
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

.nav-sidebar {
  margin-right: -21px; 
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}
.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}
.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
</style>
  <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Admin Panel <span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav nav-sidebar">
          <li><a href="<?php echo base_url();?>products/viewProducts">Products</a></li>
                    <li class=""><a href="<?php echo base_url();?>brands/index">Brands</a></li>
                    <li><a href="<?php echo base_url();?>categories/index">Categories</a></li>
                    <li class=""><a href="<?php echo base_url();?>orders/index">Orders</a></li>
                    <li><a href="<?php echo base_url();?>users/customers">Customers</a></li>
          </ul>
         
        




				