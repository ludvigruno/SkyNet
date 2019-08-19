<?php


class TarifsController
{

//Выбор тарифа
public function actionIndex()
     {

      $tarif_one_data = array();
      $tarif_one_data = GetDataTarifs::getFirstPge();
      

      require_once(ROOT. '/views/tarifs/index.php');

      return true;
     }
//конкретный тариф
public function actionMoreTarif()
     {
      $step = $_POST['step'];
      $numTarif = $_POST['tarif_id'];
      $step = intval($step);
      $numTarif = intval($numTarif);
      $moreTarif = array();
      $moreTarif = GetDataTarifs::getmoreTarif($numTarif);

      require_once(ROOT. '/views/tarifs/more_Tarif/more_Tarif.php');
      return true;
     }
     //конкретная линия тарифа
public function actionSelectTarif()
     {
      $step = $_POST['step'];
      $numTarif = $_POST['tarif_id'];
      $select_line = $_POST['select_line'];
      $step = intval($step);
      $numTarif = intval($numTarif);
      $select_line = intval($select_line);
      $selectTarif = array();
      $selectTarif = GetDataTarifs::getSelectTarif($numTarif, $select_line);
      $pay_period = array();
      $pay_period = GetDataTarifs::getSelectDate($select_line);

      require_once(ROOT. '/views/tarifs/more_Tarif/select/select.php');
      return true;
     }





  }