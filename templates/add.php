<?php
//if (isset($_GET['submit'])) {
//    echo $_GET['email'];
//    echo $_GET['title'];
//    echo $_GET['ingredients'];
//}
$email = $title = $ingredients = '';
$errors = ['email' => '', 'title' => '', 'ingredients' => ''];

if (isset($_POST['submit'])) {
    //echo htmlspecialchars($_POST['email']);
    //echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }
    if (empty($_POST['title'])) {
        $errors['title'] = 'A title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only <br/>';
        }
    }

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/(^[a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingedrients'] = 'Ingredients must be a comma separated list <br/>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include("header.php"); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your email: </label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <div class="text-red"><?php echo $errors['email']; ?></div>
        <label>Pizza Title: </label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
        <div class="text-red"><?php echo $errors['title']; ?></div>
        <label>Ingredients: </label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
        <div class="text-red"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include("footer.php") ?>


</html>