<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

<style>
    .form-box {
        padding-top: 40px;
    }

    .form-top {
        overflow: hidden;
        padding: 0 25px 15px 25px;
        background: #444;
        background: rgba(0, 0, 0, 0.35);
        -moz-border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
        border-radius: 4px 4px 0 0;
        text-align: left;
    }

    .form-top-left {
        float: left;
        width: 75%;
        padding-top: 25px;
    }

        .form-top-left h3 {
            margin-top: 0;
            color: #fff;
        }

        .form-top-left p {
            opacity: 0.8;
            color: #fff;
        }

    .form-top-right {
        float: left;
        width: 25%;
        padding-top: 5px;
        font-size: 66px;
        color: #fff;
        line-height: 100px;
        text-align: right;
        opacity: 0.3;
    }

    .form-bottom {
        padding: 25px 25px 30px 25px;
        background: #444;
        background: rgba(0, 0, 0, 0.3);
        -moz-border-radius: 0 0 4px 4px;
        -webkit-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 4px;
        text-align: left;
    }

        .form-bottom form textarea {
            height: 100px;
        }

        .form-bottom form .input-error {
            border-color: #19b9e7;
        }

        .form-bottom p {
            opacity: 0.8;
            color: #fff;
        }
        .mid{
            margin-left:120px;
        }
</style>
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text">
                    <h1 class=""><strong>Registration Area</strong> Sign-up</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h2 class="text-center">Sign-up</h2>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-bottom contact-form">
<form method="post" action="<?php echo base_url(); ?>users/register">
					<div class="form-group">
						<label class="sr_only">First Name*</label>
						<input type="text" class="contact-email form-control" name="first_name" placeholder="Enter Your First Name">
					</div>
					<div class="form-group">
						<label>Last Name*</label>
						<input type="text" class="contact-email form-control" name="last_name" placeholder="Enter Your Last Name">
					</div>
					<div class="form-group">
						<label>Email Address*</label>
						<input type="email" class="contact-email form-control" name="email" placeholder="Enter Your Email Address">
					</div>
					<div class="form-group">
						<label>Choose Username*</label>
						<input type="text" class="contact-email form-control" name="username" placeholder="Create A Username">
					</div>
					<div class="form-group">
						<label>Password*</label>
						<input type="password" class="contact-email form-control" name="password" placeholder="Enter A Password">
					</div>
					<div class="form-group">
						<label>Confirm Password*</label>
						<input type="password" class="contact-email form-control" name="password2" placeholder="Enter Password Again">
					</div>					
					
					<button name="submit" type="submit" class="btn btn-primary">Register</button>
				</form>	
		     </div>
                </div>
            </div>
        </div>

    </div>