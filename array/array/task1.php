<?php
    
    if($_POST){
      $name=$_POST['name'];

     

    // $mystring=array(['txt']);

    //$arr=array($mystring);

     // array_push($arr);

    // print_r($arr);


   // echo $arr."<br/>";
        
    //print"<pre>";
      // print_r($arr);s

      foreach($name as  $value){
         // array_push($value);
             // echo $value;
          // print_r($value);
      //  echo "<br/>$key - $value";
        print $value ."<br";
  
    }
  }
?>
<html>
    <form method="post">
        name:<input type="text" name="name[]">
         <input type="submit">
     </form>
</html>