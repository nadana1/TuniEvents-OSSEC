

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try 
{
    $connect = new PDO ("mysql:host=localhost;dbname=base1","root","");
    echo 'connect';
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM events ";
    $data = $connect->query ($query);
    echo'<table width="100%" border="1" padding="5" cellspacing="5">
            <tr>
                <td>ID EVENT</td>
                <td>NAME</td>
                <td>DESCRIPTION</td>
                
                <td>UNIVERSITY</td>
                <td>DATE</td>
                <td>OWNERID</td>
                
            
             </tr>';
             foreach($data as $row)
             {
                 echo'<tr>
                         <td>'.$row["idv"].'</td>
                         <td>'.$row["name"].'</td>
                         <td>'.$row["description"].'</td>
                         
                         <td>'.$row["university"].'</td>
                         <td>'.$row["date"].'</td>
                         <td>'.$row["ownerid"].'</td>
                         
                         </tr>';
             }
             echo '</table>';
             


} 
   catch(PDOException $error)
{
   $error->getMessage();
   echo 'erreur';
}

    
    
   
 ?>
   
            
</body>
</html>


