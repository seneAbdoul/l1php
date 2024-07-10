<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['Views'])) {
        if ($_GET['Views'] == 'liste'){
            $vehicules = find_all_Vehicule();
            require(ROUTE_DIR . 'Views/Vehicule/liste.html.php');
        } elseif ($_GET['Views'] == "add") {
            $proprietaires = find_all_Proprietaire();
            require(ROUTE_DIR . 'Views/Vehicule/add.html.php');
        }elseif ($_GET['Views'] == "Modification") {
            $proprietaires = find_all_Proprietaire();
            $id = $_GET['id'];
            $Vehicule= recup_vehicule($id);
            require(ROUTE_DIR . 'Views/Vehicule/add.html.php');
        }elseif ($_GET['Views'] == "Supprimer"){
            $id = $_GET['id'];
            delete_vehicule($id);
            header('location:'.WEB_ROUTE.'?Controller=Vehicule&Views=liste');
            exit();
        }  
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'add'){
           Ajouter_Vehicule($_POST);
        }elseif ($_POST['action'] == 'Modification') {
            Modifier_Vehicule($_POST);
        }
    }
}
function Ajouter_Vehicule(array $data):void{ 
    extract($data);
       $matriculev= "00001M2024";
      $dati=[
          $matriculev,
          $marquev,
          $couleurv,
          $poidsVidev,
          $poidsPleinv,
          $idp,
         ];
         
        $result=insert_Vehicule($dati);
          if($result){
             header('location:'.WEB_ROUTE.'?Controller=Vehicule&Views=liste');
             exit();
             }if(!$result){
            header('location:'.WEB_ROUTE.'?Controller=Vehicule&Views=add');
             exit();
             }
       }
       function Modifier_Vehicule(array $data): void {
        extract($data);
        $result = update_vehicule($idv,$marquev,$couleurv,$poidsVidev,$poidsPleinv,$idp);
        if ($result) {
            header('location:' . WEB_ROUTE . '?Controller=Vehicule&Views=liste');
            exit();
        } else {
            header('location:' . WEB_ROUTE . '?Controller=Vehicule&Views=add');
            exit();
        }
    }

    function recup_vehicule(string $id):array{
        $vehicules=find_all_Vehicule();
        foreach ($vehicules as $vehicule){
           if ($vehicule['idv'] == $id){
                   return $vehicule;
                }
           }
            return [];
        }