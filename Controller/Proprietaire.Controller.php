<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['Views'])) {
        if ($_GET['Views'] == 'liste'){
            $proprietaires = find_all_Proprietaire();
            require(ROUTE_DIR . 'Views/Proprietaire/liste.html.php');
        } elseif ($_GET['Views'] == "add") {
            require(ROUTE_DIR . 'Views/Proprietaire/add.html.php');
        }elseif ($_GET['Views'] == "Modification") {
            $id = $_GET['id'];
            $Proprietaire= recup_proprietaire($id);
            require(ROUTE_DIR . 'Views/Proprietaire/add.html.php');
        }elseif ($_GET['Views'] == "Supprimer"){
            $id = $_GET['id'];
            delete_proprietaire($id);
            header('location:'.WEB_ROUTE.'?Controller=Proprietaire&Views=liste');
            exit();
        } 
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'add'){
           Ajouter_Proprietaire($_POST);
        }elseif ($_POST['action'] == 'Modification') {
            var_dump($_POST);
            Modifier_Proprietaire($_POST);
        }
    }
}

function Ajouter_Proprietaire(array $data):void{ 
    extract($data);
       $codep= "ping000234";
      $dati=[
          $codep,
          $nomp,
          $prenomp,
          $telephonep,
          $emailp,
         ];
         
        $result=insert_Proprietaire($dati);
          if($result){
             header('location:'.WEB_ROUTE.'?Controller=Proprietaire&Views=liste');
             exit();
             }if(!$result){
            header('location:'.WEB_ROUTE.'?Controller=Proprietaire&Views=add');
             exit();
             }
       }

       function Modifier_Proprietaire(array $data): void {
        extract($data);
        $result = update_proprietaire($idp, $nomp, $prenomp, $telephonep, $emailp);
        if ($result) {
            header('location:' . WEB_ROUTE . '?Controller=Proprietaire&Views=liste');
            exit();
        } else {
            header('location:' . WEB_ROUTE . '?Controller=Proprietaire&Views=add');
            exit();
        }
    }

    function recup_proprietaire(string $id):array{
        $proprietaires=find_all_Proprietaire();
        foreach ($proprietaires as $proprietaire){
           if ($proprietaire['idp'] == $id){
                   return $proprietaire;
                }
           }
            return [];
        }