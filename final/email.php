<?php 


include('inc/header.php');
include('inc/footer.php');


	// Message Vars
	$msg = '';
    $msgClass = '';
    $toEmail= '';
    $press='Submit';
    if(filter_has_var(INPUT_POST, 'submit')){
        // Check For Submit
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
        if(!empty($email) && !empty($name) && !empty($message) && !empty($phone)){
            // Passed
            // Check Email
            $press='';
            }    else {
                $msg = 'Please fill all fields';
                $msgClass = 'alert-danger';
        
            }
    }

?>

<div class="form3" id="bs_form">
        <?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><p><?php echo $msg; ?></p></div>
    	<?php endif; ?>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="container">
                        <h1>Contact Form</h1>
                            <hr>
                            <!--User-->
                            <div class="item">
                                <label>Fullname:*</label>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input id="name" type="text" pattern="[a-zA-Z\s\.\-_]+" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                                
                            </div>
                            <!--Email-->
                            <div class="item">
                                <label>Email:*</label>
                                <i class="fa fa-at" aria-hidden="true"></i>
                                <input id="email" placeholder="Email" type="email" name="email"  value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                                
                            </div>
                            <!--Phone-->
                            <div class="item">
                                <label>   Phone:   *</label>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input id="phone" placeholder="Phone" type="text" name="phone"  value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
                                
                            </div>
                            <!--Message-->
                            <div class="item">
                                <label>Message</label>
                                <textarea style="resize:none" rows="4" cols="50" id="msg" name="message" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                                <hr>
                            </div>
                    </div>

                <button id="submit" type="submit" value="Submit" name="submit">
                    <?php   echo $press;
                                if($press==='') {
                                $press='';
                                $toEmail = 'webtech2019-20@unipi.gr';
                                echo "<a href='mailto: $toEmail ?subject=Contact Form&body= Phone Number: $phone 
                                Message :$message'>Send</a>" ;
                                }
                        
                     ?>
                </button>
                <p class="danger">Every field with * must be answered</p>
            </form>
</div>