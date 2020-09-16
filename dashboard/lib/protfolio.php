<?php




function AddNewPro($img,$desc,$user_id){
    // first
   $con = mysqli_connect("localhost","root","","fs8_proone");
   // second

   $sql = "INSERT INTO `protofolio` (`img`,`description`,`user_id`) VALUES ('$img','$desc','$user_id')";
   mysqli_query($con,$sql);

   $res = mysqli_affected_rows($con);

   if($res == 1){
       return true;
   }else{
       return false;
   }
}


function GetProtofolios(){
    $con = mysqli_connect("localhost","root","","fs8_proone");

    $sql = "select * From `userprotofolio`";
    $q = mysqli_query($con,$sql);

    $projects = [];

    while($res =  mysqli_fetch_assoc($q)){
        $projects[] = $res;
    }

    return $projects;
}




function DeletePro($pro_id){
    // first
   $con = mysqli_connect("localhost","root","","fs8_proone");
   // second

   $sql = "DELETE FROM `protofolio` WHERE `id` = $pro_id";
   mysqli_query($con,$sql);

   $res = mysqli_affected_rows($con);

   if($res == 1){
       return true;
   }else{
       return false;
   }
}



function GetProtofolioById($id){
    $con = mysqli_connect("localhost","root","","fs8_proone");

    $sql = "select * From `userprotofolio` WHERE `id` = $id";
    $q = mysqli_query($con,$sql);


    $res =  mysqli_fetch_assoc($q);

    return $res;
}




function UpdatePro($id,$desc,$img){
    // first
   $con = mysqli_connect("localhost","root","","fs8_proone");
   // second

   $sql = "UPDATE `protofolio` SET `description` = '$desc' ";

   if(!empty($img)){
    $sql .= "  , `img` = '$img' ";
   }
   
   $sql .= " WHERE `id` = $id";


   mysqli_query($con,$sql);

   $res = mysqli_affected_rows($con);

   if($res == 1){
       return true;
   }else{
       return false;
   }
}