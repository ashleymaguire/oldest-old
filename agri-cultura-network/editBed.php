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
                <h1>Add IF new, else Edit Bed</h1>
                <form action="/editBed/" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="form_header">Code:</td>
                                <td><input type="text" name="code" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Crop:</td>
                                <td><input type="text" name="crop" /></td>
                            </tr>
                            <tr>
                                <td class="form_header">Status:</td>
                                <td><input type="radio" name="status" value="active" /> Active
                                    <input type="radio" name="status" value="fallow" /> Fallow</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left">
                                    <input type="hidden" name="cmd" value="doEditBed" />
                                    <input type="submit" value="Edit Bed" name="auth" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>