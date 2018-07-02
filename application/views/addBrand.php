<br></br><br></br>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Add Brand</h3>
    </div>
    <div class="box-content">
        <table id="product" class="table table-bordered bootstrap-datatable datatable">
           
<form method="post" action="<?php echo base_url(); ?>brands/createBrand">
					<br></br><div class="col-md-10 form-group">
						<label>Title</label>
						<input type="text" class="form-control" name="name" placeholder="Brand Name">
					</div>
					<br></br><br></br>
					<div class="col-md-10 form-group">
						<label>Description</label>
						<input type="text" class="form-control" name="description" placeholder="Enter Your brand Description">
					</div>
					<br></br><br></br>
					<div class="col-md-10">
						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</div></form>	
</table>
</div>
</div>