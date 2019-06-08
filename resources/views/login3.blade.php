<form action = "whoami" method = "POST">
<input type = "text" name = "firstname" /></td>
</form>

<?php
echo "user found"
?>

<?php echo $errors->first('username')?>
<?php echo $errors->first('password')?>
<?php
    if($errors->count() != 0)
    {
        echo "<h5>List of Errors</h5>";
        foreach($errors->all() as $message)
        {
            echo $message . "<br/>";
        }
    }
?>
