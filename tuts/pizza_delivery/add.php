<?php

// if u want to share data between one page to another use sessions

// session: store data on server btwn request
//cookie: stores data on client browser
    
    include('config/db_connect.php');

    $title = $email = $ingrediants = "";

    $errors = array('email'=>'','title'=>'','ingrediants'=>'');

    if(isset($_POST['submit'])){
        //check email
        if(empty($_POST['email'])) {
            $errors['email'] = 'An email is required <br />';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $errors['email'] = 'email must be a valid email address'; 
            }
        }
        
        //check title
        if(empty($_POST['title'])) {
            $errors['title'] = 'A title is required <br />';
        } else {
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                $errors['title'] =  "Title must be letters and spaces only";
            }
        }
        
        //check ingrediants
        if(empty($_POST['ingrediants'])) {
            $errors['ingrediants'] = 'At least one ingrediants is required <br />';
        } else {
            $ingrediants = $_POST['ingrediants'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingrediants)) {
                $errors['ingrediants'] = "Ingrediants must be a comma seperated list";
            }
        }

        //Redirect - After successful submission
        if(array_filter($errors)) {
            //echo "errors in the forms";
        } else {

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingrediants = mysqli_real_escape_string($conn, $_POST['ingrediants']);

            //create a new variable
            $sql = "INSERT INTO pizzas(title, email, ingrediants) VALUES('$title','$email','$ingrediants')";

            //save to db and check
            if(mysqli_query($conn, $sql)){
                //success
                header('Location: index.php');
            } else {
                //error
                echo 'query error'. mysqli_error($conn);
            }



            //echo "form is valid";
            // header('Location: index.php');
        }

    } // end of POST check

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <secion class="container grey-text">
        <h4 class="center">Add A Pizza</h4>
        <form action="add.php" class="white" method="POST">
            
            <label for="">Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <div class="red-text">
                <?php echo $errors['email']; ?>
            </div>

            <label for="">Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
            <div class="red-text">
                <?php echo $errors['title']; ?>
            </div>

            <label for="">Ingrediants (comma seperated):</label>
            <input type="text" name="ingrediants" value="<?php echo htmlspecialchars($ingrediants); ?>">
            <div class="red-text">
                <?php echo $errors['ingrediants']; ?>
            </div>

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>

        </form>
    </secion>

    <?php include('templates/footer.php') ?>

</html>