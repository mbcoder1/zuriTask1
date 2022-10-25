<?php
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $DOB = $_POST['DOB'];
   $gender = $_POST['gender'];
   $country = $_POST['country'];

   $data = [$name, $email, $DOB, $gender, $country];

   $file = fopen('userdata.csv', 'a');
   fputcsv($file, $data);
   fclose($file);

   if($file){
    print_r($data);
   }else{
    echo "data wasn't save";
   }
}else{
    echo "no data";
}
?>