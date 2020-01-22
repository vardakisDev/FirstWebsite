<?php 
include('inc/end.php');
 require('config/db.php');
 require('config/config.php');

 
// Message Vars
    $msg = '';
    $msgClass = '';
    $outpout = '';
    //IF SUBMIT IS PRESSED THEN .... 
    if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $birth = htmlspecialchars($_POST['birth']);
        $adress = htmlspecialchars($_POST['adress']);
        $body = htmlspecialchars($_POST['body']);
        


        // Check Required Fields
		if(!empty($email) &&!empty($password) &&!empty($birth) && !empty($name) && !empty($body) && !empty($adress)){

		    // Passed
            // Check Email
            if(filter_var($email,FILTER_VALIDATE_EMAIL)=== false){
                //failed
                $msg='Please fill in a correct email';
                $msgClass = 'alert-danger';


            }else if(isset($_POST['submit'])){
                    //form data
                    $name = mysqli_real_escape_string($conn,$_POST['name']);
                    $email = mysqli_real_escape_string($conn,$_POST['email']);
                    $birth = mysqli_real_escape_string($conn ,$_POST['birth']);
                    $password = mysqli_real_escape_string($conn , $_POST['password']);
                    $adress = mysqli_real_escape_string($conn,$_POST['adress']);
                    $payment = mysqli_real_escape_string($conn,$_POST['payment']);
                    $body = mysqli_real_escape_string($conn,$_POST['body']);
                    $age = mysqli_real_escape_string($conn,$_POST['age']);
                    $total = mysqli_real_escape_string($conn,$_COOKIE['total']);
                    $quant = mysqli_real_escape_string($conn,$_COOKIE['quant']);


               
                    
                    $query = "INSERT INTO users(name,email,  date , password , adress , payment , body , age , total , quantity ) 
                    VALUES ('$name', ' $email' , '$birth', ' $password' , ' $adress', ' $payment' , ' $body'  , ' $age'  , '$total' , '$quant') ";
               
               
                    if(mysqli_query($conn , $query)){
                        $msg = 'Order submited we will inform with an email soon' ;
                        $msgClass = 'alert-success';
                    }else{
                        echo 'Error : '. mysqli_error($conn) ;
                           }
               
               
               
                }
    

        } else{
            $msg='Please fill in all fields';
            $msgClass = 'alert-danger';
        }
	
    }

    ///IF SEARCH IS DONE 






?>


    <!--Form-->
    <hr>
    <div class="container">
    <!-- alert the user whether the order has been accepted -->
        <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <!-- HERE WE WILL DISPLAY ALL THE INFORAMTION ABOUT THE ITEMS THAT ARE IN THE CART -->
        <div class="order">
            <h3 class='display-4'>Your order</h3>
            <hr>


            <script>
                var storedItems = JSON.parse(localStorage.getItem("items"));
                const table = document.querySelector('.order-table');
                var newhtml =
                    "<table class='table table-borderless'><tr><th scope='col'>Product</th><th scope='col'> Name</th><th scope='col'>Price</th><th scope='col'>Size</th><th>Quantity</th></tr>";
                for (var i = 0; i < storedItems.length; i++) {
                    newhtml = newhtml + "<tr>"
                    newhtml = newhtml + "<td><img src='" + storedItems[i].img + "' width='120px' class='rounded';></td>";
                    newhtml = newhtml + "<td>" + storedItems[i].name + "</td>";
                    newhtml = newhtml + "<td>" + storedItems[i].price + "&euro;</td>";
                    newhtml = newhtml + "<td>" + storedItems[i].size + "</td>";
                    newhtml = newhtml + "<td>" + storedItems[i].quant + "</td>";
                    newhtml = newhtml + "</tr>"


                }

                newhtml = newhtml + "</table><hr>"
                document.write(newhtml);
                const total = localStorage.getItem("total");
                var totalhtml = "<h3 class='display-4'>Your total is :" + total + "&euro;</h3><hr>";
                document.write(totalhtml);
            </script>

        </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <!--Name-->
            <div class="form-group">
                <label for="">Name [Use only latin letters]</label>
                <input type="text" name="name" class="form-control"
                    value="<?php echo isset($_POST['name']) ? $name : ''; ?>" pattern="[a-zA-Z\s\.\-_]+">
            </div>

            <!--Email-->
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control"
                    value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <!--
                Password   
                for security reasons we wont use isset here
            -->
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <!--Birth-->
            <div class="form-group">
                <lebel>Date of Birth</lebel>
                <input type="date" name="birth" class="form-control"
                    value="<?php echo isset($_POST['birth']) ? $birth : ''; ?>">
            </div>

            <!--Adress-->
            <div class="form-group">
                <lebel>Adress</lebel>
                <input type="text" name="adress" class="form-control"
                    value="<?php echo isset($_POST['adress']) ? $adress : ''; ?>">
            </div>
            <!--Payments-->
            <div class="tab-content">
                <label>Select a payment method:</label>

                <div class="form-group">
                    <div class="pay1">
                        <i class=" fa fa-cc-paypal"></i>
                        <input type="radio" name="payment" value="Paypal" checked>Paypal
                    </div>
                    <div class="pay2">
                        <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                        <input type="radio" name="payment" value="Mastercard" checked>Mastercard
                    </div>
                    <div class="pay3">
                        <i class="fa fa-cc-visa" aria-hidden="true"></i>
                        <input type="radio" name="payment" value="Visa">Visa
                    </div>
                </div>

                <!--Message-->
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="body"
                        class="form-control"><?php echo isset($_POST['body']) ? $body : ''; ?> </textarea>
                </div>
                <!--Age-->
                <div class="dropdown">
                    <select name="age">
                        <option>Age</option>
                        <?php
                            for($age = 1; $age < 100; $age++)
                            echo"<option  value = '".$age."'>".$age."</option>";
	                     ?>
                    </select>
                </div>

                <br>



                <!--Submit-->
                <hr>
                <button type=" submit" name="submit" class="btn btn-primary">Accept & Proceed</button>
        </form>
    </div>
    </div>


    <?php include('inc/footer.php'); ?>