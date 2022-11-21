<?php
    $connection=mysqli_connect("localhost","root","","batch1");
    if($_POST){
        $name=$_POST['text1'];
        $gender=$_POST['text2'];
    $q=mysqli_query($connection,"insert into tbl_student (st_name,st_gender)values('{$name}','{$gender}')");

    if($q){
        echo "<script>alert('record added');</script>";
    }
}

?>
<html>
    <body>
        <form method="post">
            name:<input type="text" name="text1">
            gender:<select name="text2">
                <option>male</option>
                <option>fmale</option>
            </select>
            </select>
            <input type="submit">

        </form>
    </body>
</html>