
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

<div class="pull-right">
    <a href="<?php echo base_url(); ?>brands/addBrand"><input type="button" class="btn btn-primary" value="Add Brand" /> </a>
</div>
<br />
<br />
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Brand Details</h3>
    </div>
    <div class="box-content">
        <table id="product" class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>#</th>
                                    
                    <th> Name</th>
                    <th>Description</th>
                  
                   
                 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($brands as $brand): ?>
                <tr>
                        <td></td>
                        <td><?php echo $brand->name;?></td>
                        <td><?php echo $brand->description;?></td>                     
                        <td> <a href ="#" class="delete"  id ="<?php echo $brand->id;?>">delete</td> 
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
        window.location="<?php echo base_url();?>brands/deleteBrand/"+id;
    }
    else
    {
        return false;
    }
})

})
</script>