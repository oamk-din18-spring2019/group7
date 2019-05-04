<?php echo validation_errors(); ?>

<?php echo form_open('messager/message'); ?>
<p>
	<title>Message</title>
</p>
 
    <!-- Main info -->
    <table>
        <div><h3>My message</h3></div>
        <tr>
            <td>Name* :</td>
            <td><input type="text" name='name' required></td>
        </tr>
        <tr>
            <td>Email* :</td>
            <td><input type="text" name='email' required></td>
        </tr>
        <tr>
            <td>Message* :</td>
            <td><input type="text" name='message' required></td>
        </tr>
    </table>   

    <br>
     <!-- Submit button -->
     <tr>
        <td><input type="submit" value="Send the message"></td>
    </tr>
</form>