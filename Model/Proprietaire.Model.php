<?php
      function insert_Proprietaire(array $data):int{
          $PDO=ouvrir_connexion_bd();
          $sql="INSERT INTO proprietaire (codep,nomp,prenomp,telephonep,emailp) VALUES (?,?,?,?,?)";
          $sth = $PDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
          $sth->execute($data);
          $nbre_ligne_insert = $sth->rowCount();
          fermer_connexion_bd($PDO);
          return $nbre_ligne_insert;
       }
       function find_all_Proprietaire():array{
        $PDO=ouvrir_connexion_bd();
        $sql="select * from proprietaire ";
        $sth = $PDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $data = $sth->fetchALL();
        fermer_connexion_bd($PDO);
        return $data;
     }

     function update_proprietaire($idp, $nomp, $prenomp, $telephonep, $emailp): int {
        $PDO = ouvrir_connexion_bd();
        $sql = "UPDATE proprietaire SET nomp=?, prenomp=?, telephonep=?, emailp=? WHERE idp=?";
        $sth = $PDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($nomp, $prenomp, $telephonep, $emailp, $idp));
        $nbre_ligne_insert = $sth->rowCount();
        fermer_connexion_bd($PDO);
        return $nbre_ligne_insert;
    }
    function delete_proprietaire($idp): int {
        $PDO = ouvrir_connexion_bd();
        $sql = "DELETE FROM proprietaire WHERE idp = ?";
        $sth = $PDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($idp));
        $nbre_ligne_deleted = $sth->rowCount();
        fermer_connexion_bd($PDO);
        return $nbre_ligne_deleted;
    }