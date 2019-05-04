<?php echo validation_errors(); ?>
<?php echo form_open('customers/create'); ?>
<p>
	<title>Create new ccount</title>
</p>

    <!-- Main info -->
    <table>
        <div><h3>My Account</h3></div>
        <tr>
            <td>Username* :</td>
            <td><input type="text" name='username' required></td>
        </tr>
        <tr>
            <td>Password* :</td>
            <td><input type="password" name='password' required></td>
        </tr>
    </table>   
     
    <br>

    <!-- Additional info -->
    <table>
        <div><h3>Personal Information</h3></div>
        <tr>
            <td>First name* :</td>
            <td><input type="text" name='firstname' required></td>
        </tr>
        <tr>
            <td>Last name* :</td>
            <td><input type="text" name='lastname' required></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="email" name='email'></td>
        </tr>
        <tr>
            <td>Phone number* :</td>
            <td>
            <input type="phone" name='phone' required>
         </td>
        </tr>
        <tr>
            <td>Address* :</td>
            <td><input type="text" name='address' required></td>
        </tr>
        <tr>
            <td>City* :</td>
            <td><input type="text" name='city' required></td>
        </tr>
        <tr>
            <td>Country* :</td>
            <td><input type="text" name='country' required></td>
        </tr>
        <tr>
            <td>Postalcode :</td>
            <td><input type="text" name='postalcode'></td>
        </tr>
    </table>
    
    <br>
    
    <!-- Submit button -->
    <tr>
        <td><input type="submit" value="Create new account"></td>
    </tr>
</form>