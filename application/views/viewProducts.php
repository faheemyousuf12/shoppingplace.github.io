<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
       .delete {
        display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
	color: #fff;
	background-color: #d9534f;
	border-color: #d43f3a;
  }
  </style>
 <br></br><br></br>

<br />
<br />
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Product Details</h3>
    </div>
    <div class="box-content">
        <table id="product" class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>#</th>
                                    
                    <th> Name</th>
                    
                    <th>Description</th>
                   <th>Quantity</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Delete</th>  
                               
                 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                

                    <tr>
                        <td></td>
                        <td><?php echo $product->title;?></td>
                        
                        <td><?php echo $product->description;?></td>
                        <td><?php echo $product->quantity;?></td>
                        <td><?php echo $product->price;?></td>
                         <td>Small</td>
                         <td> <a href ="#" class="delete"  id ="<?php echo $product->id;?>">delete</td> 
                    </tr>
            <?php endforeach;?>

            </tbody>
        </table>
</div>
</div>
<script>
$(document).ready(function(){
$('.delete').click(function(){
    var id=$(this).attr("id");
    if(confirm("are you sure you want to delete this"))
    {
        window.location="<?php echo base_url();?>products/deleteProduct/"+id;
    }
    else
    {
        return false;
    }
})

})
</script>