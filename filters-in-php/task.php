<?php
    if(isset($_POST['submitbtn'])){
        if($_POST){
            $name=$_POST['fname'];
            $mobileno=$_POST['mobileno'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $url=$_POST['url'];

            $senitizename=filter_var($name,FILTER_SANITIZE_STRING);
            echo $senitizename;
            echo "<br>";

            $senitizenumber=filter_var($mobileno,FILTER_SANITIZE_STRING);
            echo $senitizenumber;
            echo "<br>";

            if($mobileno== $senitizenumber && filter_var($mobileno,FILTER_VALIDATE_INT)){
                    echo "the $mobileno is a valid mobile number";
            }else{
                echo "the $mobileno no is not a valid mobilenumber";
            }
            echo "<br>";

            $senitizedemail=filter_var($email,FILTER_SANITIZE_EMAIL);

            if($email== $senitizedemail && filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "the $email is a valid email address";
            }else{
                echo "the $email is not a valid email address";
            }
            echo "<br>";

            if(filter_var($address,FILTER_VALIDATE_IP)){
                echo "the <b>$address</b> is a valid ip address";
            }else{
                echo "the <b>$address</b> is not a valid ip address";
            }
            echo "<br>";

            $senitizeUrl= filter_var($url,FILTER_SANITIZE_URL);
            if($url == $senitizeUrl && filter_var($url,FILTER_VALIDATE_URL)){
                echo "the $url is a valid ip address";
            }else{
                echo "the $url is not a valid ip address";
            }
        }
    }
?>
<html>
    <body>
        <form method="post">
            name :<input type="text" name="fname">
            <br>
            mobilenumber: <input type="number" name="mobileno">
            <br>
            email : <input type="email" name="email">
            <br>
            ipddress : <textarea name="address"></textarea>
            <br>
            websiteurl :<input type="url" name="url">
            <br>
            <input type="submit" value="submit" name="submitbtn">
        </form>
    </body>
</html>