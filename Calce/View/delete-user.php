<?phpinclude_once '../Controller/ControllerUser.php';
if (isser($_GET['id'])){
    $id = $_GET['id'];

    $userController = new ControllerUser();
    $userController->deleteUser($id);
}
?>