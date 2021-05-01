<?php
session_start();
           if (isset($_POST['Login']))
           { 
                    
                    if(empty($_POST["Email"]) || empty($_POST["password"]))
                    {
                        header("location:login.php?Empty= Please Fill in The Blanks");
                        
                    }
                    else
                    {
                        $connect = new PDO ("mysql:host=localhost;dbname=base1","root","");
                        echo 'connect';

                        $Email=$_POST["Email"] ;
                        $Password=$_POST["password"] ;
                        $query ="SELECT * FROM users WHERE Email='$Email' AND Password='$Password'";
               
                        $req=$connect->prepare($query);
                        $req->execute();
                        $sql1 = "SELECT Firstname,LastName FROM users WHERE Email='$Email' AND Password='$Password'";
                        $stmt = $connect->prepare($sql1);
                        $stmt->execute();

                        $stmt->bindColumn(1, $name,);
                        $stmt->bindColumn(2, $lastname, PDO::PARAM_LOB);

                        $stmt->fetch();

                        header('Content-type: '.$name);
                        
                       
                        if ($req->fetch()>0)
                        {  
                            $row=$req->fetch();

                            $_SESSION['User']=$name;
                            header("location:dashboard.php");
                            
                        }
                        else
                        {
                           header("location:login.php?existe= Your password or your email is incorrect");
                        }
                }
            }
        
        ?>