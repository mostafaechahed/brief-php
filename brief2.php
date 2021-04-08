
<form methode="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
Password:<input type="password" name="password">
<button type="submit" >submet</button>
</form>


<?php

function verefierpassword(){
    $str =$_GET["password"];
    $regex ="/((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]){8,15})/";
    if (preg_match($regex,$str) && strlen($regex)>=8) {
        echo "nice";
    }else echo "error";
    
}
verefierpassword();







































// if (isset($_GET['submit'])) {
//    if($_GET['password']>=1 && $_GET['password']<=8){
//        echo "votre password et passer le 8caractére";

       
          
//        }
//    }




