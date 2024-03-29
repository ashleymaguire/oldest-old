<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="includes/screen.css" rel="stylesheet" type="text/css" />
        <title>Agri-Cultura Network - Growers - Home</title>
    </head>

    <body>
        <div id="content">
            <?php include("includes/header.php"); ?>

            <div class="padding_10 margin_10">
                <h1>Add User</h1>
                <form action="/addUser/" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="form_header">User Type:</td>
                                <td><input type="radio" name="userType" value="admin" /> Admin
                                    <input type="radio" name="userType" value="grower" /> Grower</td>
                            </tr>
                            <tr>
                                <td class="form_header">Username:</td>
                                <td><input type="text" name="username" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Password:</td>
                                <td><input type="text" name="password" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Grower Code:</td>
                                <td><input type="text" name="growerCode" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Manager First Name:</td>
                                <td><input type="text" name="managerFirst" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Manager Last Name:</td>
                                <td><input type="text" name="managerLast" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Billing First Name:</td>
                                <td><input type="text" name="billingFirst" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Billing Last Name:</td>
                                <td><input type="text" name="billingLast" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Billing Address:</td>
                                <td><input type="text" name="billingAddress" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Billing Address2:</td>
                                <td><input type="text" name="billingAddress2" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">City:</td>
                                <td><input type="text" name="city" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">State:</td>
                                <td><input type="text" name="state" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Zip:</td>
                                <td><input type="text" name="zip" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right">
                                    <input type="hidden" name="cmd" value="doAddUser" />
                                    <input type="submit" value="Add User" name="auth" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>