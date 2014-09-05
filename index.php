<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/flick/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" media="all" />
        <link href="css/style.css" rel="stylesheet" media="all" />
        <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
        <script src="js/JSmain.js" type="text/javascript" ></script>
    </head>
    <body>
        <div id="Recolector"></div>
        <div id="calc" >
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" id="txt_Nombre" ></td>
                </tr>
            </table>    
            
        </div>
        <div style="position: absolute; width: 600px; height: 400px; border: #0073ea solid 1px; border-radius: 15px; left: 500px; top: 200px">
            <form action="newEmptyPHP.php" id="form_test" method="get">
            <input type="text" name="txt_sdds" required autofocus title="animal" ><br>
            <select name="cb_op" id="cb_op">
                <option value="78678">op 1</option>
                <option value="1" selected >op 2</option>
                <option value="12">op 2</option>
            </select>
            <input type="submit" value="enviar">
        </form>
            </div>
    </body>
</html>
