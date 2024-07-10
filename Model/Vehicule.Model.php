<?php
function insert_Vehicule(array $data):int{
          $PDO=ouvrir_connexion_bd();
          $sql="INSERT INTO vehicule (matriculev,marquev,couleurv,poidsVidev,poidsPleinv,idp) VALUES (?,?,?,?,?,?)";
          $sth = $PDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
          $sth->execute($data);
          $nbre_ligne_insert = $sth->rowCount();
          fermer_connexion_bd($PDO);
          return $nbre_ligne_insert;
       }
       function find_all_Vehicule():array{
        $PDO=ouvrir_connexion_bd();
        $sql="select * from vehicule ";
        $sth = $PDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $data = $sth->fetchALL();
        fermer_connexion_bd($PDO);
        return $data;
     }
     function update_vehicule($idv,$marquev,$couleurv,$poidsVidev,$poidsPleinv,$idp): int {
        $PDO = ouvrir_connexion_bd();
        $sql = "UPDATE vehicule SET marquev=?, couleurv=?, poidsVidev=?, poidsPleinv=?, idp=? WHERE idv=?";
        $sth = $PDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($marquev,$couleurv,$poidsVidev,$poidsPleinv,$idp,$idv));
        $nbre_ligne_insert = $sth->rowCount();
        fermer_connexion_bd($PDO);
        return $nbre_ligne_insert;
    }
    function delete_vehicule($idv): int {
        $PDO = ouvrir_connexion_bd();
        $sql = "DELETE FROM vehicule WHERE idv = ?";
        $sth = $PDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($idv));
        $nbre_ligne_deleted = $sth->rowCount();
        fermer_connexion_bd($PDO);
        return $nbre_ligne_deleted;
    }