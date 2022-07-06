<?php
     include_once "config.php";
     $fname = mysqli_real_escape_string($conn, $_POST['fname']); 
     $lname = mysqli_real_escape_string($conn, $_POST['lname']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);

     if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
          // lets check user email is valid or not 
          if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //lets check that email already exits in the database or not 
            $sql = mysqli_query($conn, "SELECT email FROM user WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0) { // if email already exist
                    echo "$email - This email already exits"
            }else{
                // lets check user upload file or not 
                if(isset($_FILES['image'])) // if file is uploaded
                $img_name = $_FILES['image']['name']; // getting user uploaded img name
                $img_type = $_FILES['image']['type']; //getting user uplaod img type
                $tmp_name = $_FILES['image']['tmp_name']; // this tmp name is suer to save/move in our folder 

                // let's explode image and get the last extension like jpg png
                    $img_explode = explode('.',$img_name);
                    img_ext = end($img_explode); // here we get the extension of an user upload img file 

                    $extensions = ['png','jpeg', 'jpg']; // these are some valid img ext and we've store them in array
                    if(in_array($img_ext, $extensions) === true){  // if user uploaded img ext is matched with any array extension 
                      $time = time(); //this will return us current time 
                                      // we need this time because when you uploading user img to in our folder with rename and current time
                      
                                    // so all the img file will havae a unique name
                     // lets move the user uploaded img to out particular folder
                     $new_img_name = $time.$img_name;
                     if(move_uploaded_file($tmp_name, "images/" .$new_img_name)){ // if user upload img move to our folder successfully
                            $status = "Active now"; // once user signed up thne his status wull ne active now
                            $random_id = rand(time(), 10000000); // creating randon id for user 
                     }
                                      
                     }else{
                        echo "Please select an image file - jpeg, jpg, png!";
                     }

            }else{
                echo "please select an image file!";
            }
          }else{
            echo "$email - This is not a valid !";
          }
     }else{
        echo "All input field are requied!";
     }
?>