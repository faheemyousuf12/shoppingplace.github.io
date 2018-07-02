<style>
.checkout h2{
	font-size:1em;
	color:#212121;
	text-transform:uppercase;
	margin:0 0 3em;
}
.checkout h2 span{
	color:#3399cc;
}
table.timetable_sub {
	width:100%;
	margin:0 auto;
}
.timetable_sub thead {
    background: #004284;
}
.timetable_sub th {
    background: #212121;
    color: #fff !important;
    text-transform: capitalize;
    font-size: 13px;
    border-right: 1px solid #ded2d2;
}
.timetable_sub th, .timetable_sub td {
    text-align: center;
    padding: 7px;
    font-size: 14px;
    color: #212121;
}
.timetable_sub td {
	border:1px solid #CDCDCD;
}
td.invert-image a img {
    width:30%;
    margin: 0 auto;
}
.rem{
	position:relative;
}
.close1,.close2,.close3 {
    background: url('../images/close_1.png') no-repeat 0px 0px;
    cursor: pointer;
    width: 28px;
    height: 28px;
    position: absolute;
    right: 15px;
    top: -13px;
    -webkit-transition: color 0.2s ease-in-out;
    -moz-transition: color 0.2s ease-in-out;
    -o-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out;
}
 .value-minus,
.value-plus{
    height: 40px;
    line-height: 24px;
    width: 40px;
    margin-right: 3px;
    display: inline-block;
    cursor: pointer;
    position: relative;
    font-size: 18px;
    color: #fff;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
	border:1px solid #b2b2b2;
	    vertical-align: bottom;
}
.quantity-select .entry.value-minus:before,
.quantity-select .entry.value-plus:before{
	content: ""; 
	width: 13px;
	height: 2px; 
	background: #000;
	left: 50%;
	margin-left: -7px; 
	top: 50%;
	margin-top: -0.5px;
	position: absolute;
}
.quantity-select .entry.value-plus:after{
	content: "";
	height: 13px;
	width: 2px; 
	background: #000;
	left: 50%; 
	margin-left: -1.4px;
    top: 50%;
    margin-top: -6.2px;
	position: absolute;
}
.value  {
    cursor: default;
    width: 40px;
	height:40px;
    padding: 8px 0px;
    color: #A9A9A9;
    line-height: 24px;
    border: 1px solid #E5E5E5;
    background-color: #E5E5E5;
    text-align: center;
    display: inline-block;
	margin-right: 3px;
}
.quantity-select .entry.value-minus:hover,
 .quantity-select .entry.value-plus:hover{
	background: #E5E5E5;
}

.quantity-select .entry.value-minus{
    margin-left: 0;
}
/*-- quantity-end --*/
.checkout-left-basket h4{
	padding: 1em;
    background: #84c639;
    font-size: 1.1em;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    margin: 0 0 1em;
}
.checkout-left {
    margin: 2em 0 0;
}
.checkout-left-basket ul li{
	list-style-type:none;
	margin-bottom:1em;
	font-size:14px;
	color:#999;
}
.checkout-left-basket {
    float: left;
    padding-left: 0;
}
.checkout-right-basket{
	float: right;
margin: 3em 0 0 0em;    
}
.checkout-left-basket ul li span {
    float: right;
}
.checkout-left-basket ul li:nth-child(5) {
    font-size: 1em;
    color: #212121;
    font-weight: 600;
    padding: 1em 0;
    border-top: 1px solid #DDD;
	border-bottom: 1px solid #DDD;
    margin: 2em 0 0;
}
.checkout-right-basket a {
    padding: 10px 20px 10px 18px;
    color: #fff;
    font-size: 1em;
    background: #212121;
    text-decoration: none;
}
.checkout-right-basket a:hover{
    background: #84c639;
}
.checkout-right-basket a span {
    left: -.5em;
    top: 0.1em;
}
.checkout {
    padding: 5em 0;
}
.address_form_agile {
    float: right;
}
.information-wrapper input {
    width: 100%!important;
}
.check_box_one.cashon_delivery {
    float: left;
    width: 100%;
    margin-bottom: 10px;
}
/*-- checkbox --*/
.agileits-login label {
    font-size: 1em;
    color: #000;
	letter-spacing: 0.5px;
    font-weight: 400;
    cursor: pointer;
    position: relative;
}
input.checkbox {
    background: #fd0006;
    cursor: pointer;
    width: 1.2em;
    height: 1.2em;
    display: inline-block;
	margin: 0 5px 0 0;
	vertical-align: text-bottom;
}
input.checkbox:before {
	content: "";
	position: absolute;
	width: 1.2em;
	height: 1.2em;
	background: inherit;
	cursor: pointer;
}
input.checkbox:after {
	content: ""; 
	position: absolute;
	top: 0px;
	left: 0;
	z-index: 1;
	width: 1.2em;
	height: 1.2em;
	border: 1px solid #fff; 
	-webkit-transition: .4s ease-in-out;
	-moz-transition: .4s ease-in-out; 
	transition: .4s ease-in-out;
}
input.checkbox:checked:after {
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
	height: 1.2em;
	border-color: #fff;
	border-top-color: transparent;
	border-right-color: transparent;
}
.anim input.checkbox:checked:after {
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
	height: .6em;
	border-color: transparent;
	border-right-color: transparent;
	animation: .4s rippling .4s ease;
	animation-fill-mode: forwards;
}
@keyframes rippling {
	50% {
		border-left-color: #fff;
	}
	100% {
		border-bottom-color: #fff;
		border-left-color: #fff;
	}
} 
.vertical_post.check_box_agile {
    padding-bottom: 1em;
}  
.checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] {
    margin-left: -29px;
}
.pen-title {
  padding: 50px 0;
  text-align: center;
  letter-spacing: 2px;
}
.pen-title h1 {
  margin: 0 0 20px;
  font-size: 48px;
  font-weight: 300;
}
.pen-title span {
  font-size: 12px;
}
.pen-title span .fa {
  color: #33b5e5;
}
.pen-title span a {
  color: #33b5e5;
  font-weight: 600;
  text-decoration: none;
}
</style>

<?php if($this->cart->contents()) : ?>
	<form method="post" action="<?php echo base_url();?>cart/process">
	<table class="timetable_sub">
					<thead>
					<tr>
					<th>S.No</th>
					<th>Image</th>
					<th>Quanity</th>
					<th>Item Title</th>
  			<th style="text-align:right">Item Price</th>
		</tr>
		<?php $i = 0; ?>
					</thead>
					<tbody>
					 <?php 
					   $i= 0;
					  ?>
					<?php foreach ($this->cart->contents() as $items): ?>
			<tr class="rem1">

			<td class="rem1"><?php echo $i+1;?></td>
			<td class="invert-image">image</td>
			<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span><?php echo $items['qty']; ?></span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
	  			<td class="invert"><?php echo $items['name']; ?></td>
	  			<td class="invert" style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
			</tr>			
				<?php echo '<input type="hidden" name="item_name['.$i.']" value="'.$items['name'].'" />';?>
				<?php echo '<input type="hidden" name="item_code['.$i.']" value="'.$items['id'].'" />';?>
				<?php echo '<input type="hidden" name="item_qty['.$i.']" value="'.$items['qty'].'" />';?>
			<?php $i++; ?>
		<?php endforeach; ?>

		<tr>
			<td></td>
			<td></td>
			<td></td>
  			<td class="right"><strong>Shipping</strong></td>
  			<td class="right" style="text-align:right"><?php echo $this->config->item('shipping');?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
  			<td class="right"><strong>Tax</strong></td>
  			<td class="right" style="text-align:right"><?php echo $this->config->item('tax');?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
  			<td class="right"><strong>Total</strong></td>
  			<td class="right" style="text-align:right"><strong>$<?php echo $this->cart->format_number($this->cart->total()+ $this->config->item('shipping') + $this->config->item('tax')); ?></strong></td>
		</tr>

				</tbody>
				</table>
	<br>
		<?php if(!$this->session->userdata('logged_in')) : ?>
			<p><a href="<?php echo base_url(); ?>users/register" class="btn btn-primary">Create An Account</a></p>
			<p><em>You must log in to make purchases</em></p>
		<?php else : ?>
			<h3>Shipping Info</h3>
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" name="address">
			</div>
			<div class="form-group">
				<label>Address 2</label>
				<input type="text" class="form-control" name="address2">
			</div>
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control" name="city">
			</div>
			<div class="form-group">
				<label>State</label>
				<input type="text" class="form-control" name="state">
			</div>
			<div class="form-group">
				<label>Zipcode</label>
				<input type="text" class="form-control" name="zipcode">
			</div>
		<p><button class="btn btn-primary" type="submit" name="submit">Checkout</button></p>
		<?php endif; ?>
	</form>
<?php else : ?>
	<p>There are no items in your cart</p>
<?php endif; ?>
<script src="js/jquery-1.11.1.min.js"></script>
					
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
							
