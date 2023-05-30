<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Visualizar Usuários</title>
</head>
<body>
<?php
    include_once '../Controller/ControllerUser.php'
    $userController = new ControllerUser();
    $users = $UserController->viewUsers();
    ?>
    <h2 size = "1" style="font-family: Verdana, Arial, Helvetica, sans-serif;"> Adicionar Novo Usuário</h2>
    <button size = "1" style="font-family: Verdana, Arial, Helvetica, sans-serif;" class="styled-button"
    onclick="window,location.href='add-user.php'">Adicionar Novo Usuário</button>
    <br>
    <br>

    <table width='80%' border=0 align='center'>
        <tr bgcolor='#CCCCCC'>
            <td>
                <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Código<strong></font>
            </td>
            <td>
                <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nome<strong></font>
            </td>
            <td>
                <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Idade<strong></font>
            </td>
            <td>
                <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Email<strong></font>
            </td>
            <td>
                <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong>Ações<strong></font>
            </td>
</tr>
<?php
foreach ($users as $user) {
    echo "<tr>";
    echo "<td size='1' style='font-family: Verdana, Arial, Helvetica, sans-serif;''>" . $user['id'] . "</td>";
    echo "<td size='1' style='font-family: Verdana, Arial, Helvetica, sans-serif;''>" . $user['name'] . "</td>";
    echo "<td size='1' style='font-family: Verdana, Arial, Helvetica, sans-serif;''>" . $user['age'] . "</td>";
    echo "<td size='1' style='font-family: Verdana, Arial, Helvetica, sans-serif;''>" . $user['email'] . "</td>";
    echo "<td size='1' style='font-family: Verdana, Arial, Helvetica, sans-serif;''><a href=\"edit-user.php?id={$user['id']}\">Editar</a> | <a href=\"delete-user.php?id={$user['id']}\" onClick=\"return confirm('Tem certeza que deseja excluir?')\">Excluir</a> | <a href \"../index.php\">Adicionar</a>
    </a></a></td>"

}
?>
</table>
</body>
</html>