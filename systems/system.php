<?php
session_start();
include 'DB.php';
$db = new DB();
$tblName = 'persoon';
if(isset($_REQUEST['system_type']) && !empty($_REQUEST['system_type'])){
    if($_REQUEST['system_type'] == 'add'){
        $insertData = array(
            'voornaam' => $_POST['voornaam'],
            'achternaam' => $_POST['achternaam'],
            'email' => $_POST['email'],
            'telefoon-nr' => $_POST['telefoon-nr'],
            'straat' => $_POST['straat'],
            'postcode' => $_POST['postcode'],
            'plaats' => $_POST['plaats'],
            'bestel' => $_POST['bestel'],
        );
        $insert = $db->insert($tblName,$insertData);
        $statusMsg = $insert?'User data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:main.php");
    }elseif($_REQUEST['system_type'] == 'edit'){
        if(!empty($_POST['id'])){
            $insertData = array(
                'voornaam' => $_POST['voornaam'],
                'achternaam' => $_POST['achternaam'],
                'email' => $_POST['email'],
                'telefoon-nr' => $_POST['telefoon-nr'],
                'straat' => $_POST['straat'],
                'postcode' => $_POST['postcode'],
                'plaats' => $_POST['plaats'],
                'bestel' => $_POST['bestel'],
            );
            $condition = array('id' => $_POST['id']);
            $update = $db->update($tblName,$insertData,$condition);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:index.php");
        }
    }elseif($_REQUEST['system_type'] == 'delete'){
        if(!empty($_GET['id'])){
            $condition = array('id' => $_GET['id']);
            $delete = $db->delete($tblName,$condition);
            $statusMsg = $delete?'User data has been deleted successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:main.php");
        }
    }
}