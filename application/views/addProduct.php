<br></br><br></br>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Add Product</h3>
    </div>
    <div class="box-content">
        <table id="cat" class="table table-bordered bootstrap-datatable datatable">
<form id="product_form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>products/uploadImage">
<br></br>
					<div class="col-md-10 form-group">
						<label>Title</label>
						<input type="text" class="form-control" name="title" placeholder="Product Name">
					</div>
					<br></br><br></br>
					<div class="col-md-10 form-group">					
						<label>Category*</label>
						<select class="form-control">

					<?php foreach(get_categories_h() as $category) : ?>
                            <option value="<?php echo $category->id ;?>"><?php echo $category->name ;?></option>
						<?php endforeach;?>	
						</select>
					
					</div>	
					<br></br><br></br>
					<div class="col-md-10 form-group">
						<label>Description</label>
						<input type="text" class="form-control" name="description" placeholder="Enter Your Product Description">
					</div>
					<br></br><br></br>
					<div class="col-md-10 form-group">
						<label>Image*</label>
						<input type="file" class="form-group" id="image_file" name="image_file" >
					</div>
					<br></br><br></br>
					<div class="col-md-10 form-group">
						<label>Price*</label>
						<input type="text" class="form-control" name="price" >
					</div>
					<br></br><br></br>
					<div class="col-md-10 form-group">
						<label>Quantity*</label>
						<input type="number" class="form-control" name="quantity" placeholder="Enter A Password">
					</div>
					<br></br><br></br>
					<div class="col-md-10 form-group">
						<label class="col-md-12">Size*</label>
						<select class="form-control">

							<option>S</option>
								<option>M</option>
									<option>L</option>
										<option>XL</option>
						</select>
					</div>					
					<br></br><br></br>
					<div class="col-md-10">
					<button id="upload" name="upload" value="Upload" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>	
</table>
</div>
</div>
                    <div id="uploaded_image">
                    </div>


				<script>
$(document).ready(function(){
$('.product_form').on('submit',function(e){
    e.preventDefault();
   
    if($('#image_file').val()=='')
    {
        alert("Please select file");
    }
    else
    {
    	$.ajax({
        url:"<?php echo base_url();?>products/uploadImage",
        method:"POST",
        data : new FormData(this),
        contentType:false,
        cache:false,
        processData:false,
        success:function(data)
        {
           $('#uploaded_image').html(data);
        }

        });
    }
});

});
</script>