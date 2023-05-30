<!DOCTYPE html>
<html>
    <head>
        <title>Adicionar Usuário</title>
    </head>
<body>
        <?php
            include_once '../Controller/ControllerUser.php';
            $userController = new ControllerUser();

            if (isset($_POST['Submit'])) {
            $userController->addUser();
        }
        ?>

        <form method="post" name="form1" action="">
            <center>
            <h1>Formulário - Incluir registro</h1>
    </center>
    <table width="588" border="0" align="center">
        <tr>
            <td width="118">
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome completo:</font>
    </td>
    <td width="460">
        <input name="nome" type="text" class="formbutton" id="nome" size="52" maxlength="150">
    </td>
    </tr>


    <tr>
        <td>
            <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Idade:</font>
    </td>
    <td>
        <font size="2">
            <input name="idade" type="text" id="idade" size="05" maxlength="150" class="formbutton">
    </font>
    </td>
    </tr>
        <tr>
        <td>
            <font size="1" face="Verdana, Arial, Helvetica, sans-serif">E-mail</font>
    </td>
    <td>
        <font size="2">
            <input name="email" type="email" id="email" class="formbutton">
    </font>
    </td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Caadastrar">
            <button type = 'submit' formaction='../View/viewusers.php'>Consultar</button>
    </td>
    </tr>
    </table>
</form>
</body>
</html>