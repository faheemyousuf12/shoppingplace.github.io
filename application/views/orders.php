
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
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Order Details</h3>
    </div>
    <div class="box-content">
        <table id="product" class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>#</th>
                                    
                    <th>Product</th>
                     <th>Username</th>
                   <th>TansactionId</th>
                   <th>Quantity</th>
                    <th>Price</th>
                    <th>Address</th>
                    <th>city</th>
                   <th>State</th>
                    <th>Zip Code</th>
                   <th>Delete</th>
                   
                   
                 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                

                    <tr>
                        <td></td>
                        <td><?php echo $order->product_id;?></td>
                        <td><?php echo $order->user_id;?></td>
                        <td><?php echo $order->transaction_id;?></td>
                         <td><?php echo $order->qty;?></td>
                        <td><?php echo $order->price;?></td>
                         <td><?php echo $order->address;?></td>
                        <td><?php echo $order->city;?></td>
                        <td><?php echo $order->state;?></td>
                         <td><?php echo $order->zipcode;?></td>
                         <td> <a href ="#" class="delete"  id ="<?php echo $order->id;?>">delete</td>                       
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
        window.location="<?php echo base_url();?>orders/deleteOrder/"+id;
    }
    else
    {
        return false;
    }
})

})
</script>