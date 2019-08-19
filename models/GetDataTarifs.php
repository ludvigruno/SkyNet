<?php 
class GetDataTarifs
{
  //Первая старница
  public static function getFirstPge(){

  	$url = "C:/xampp/htdocs/test_json/data.json";
    $arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
    );  
			$json=file_get_contents($url, false, stream_context_create($arrContextOptions));
			$data = json_decode($json,true);

          $tarif_one_data[0] = $data['tarifs'][0]['tarifs'][1];
          $tarif_one_data[1] = $data['tarifs'][1]['tarifs'][0];
          $tarif_one_data[2] = $data['tarifs'][2]['tarifs'][0];
          $tarif_one_data[3] = $data['tarifs'][1]['free_options'];
          $tarif_one_data[4] = $data['tarifs'][2]['free_options'];

       //print_r($data['tarifs'][1]['free_options']);
              return $tarif_one_data;

  }
  //Выбранная линейка тарифов
    public static function getmoreTarif($numTarif){
    $url = "C:/xampp/htdocs/test_json/data.json";
    $arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
    );  
      $json=file_get_contents($url, false, stream_context_create($arrContextOptions));
      $data = json_decode($json,true);
          $a =1;
          $b =0;
          $c =2;
          $d =3;
         if($numTarif == 1 || $numTarif == 2){
          $a =0;
          $b =1;

         }
          $moreTarif[0] = $data['tarifs'][$numTarif]['tarifs'][$a];
          $moreTarif[1] = $data['tarifs'][$numTarif]['tarifs'][$b];
          $moreTarif[2] = $data['tarifs'][$numTarif]['tarifs'][$c];
          $moreTarif[3] = $data['tarifs'][$numTarif]['tarifs'][$d];
          $moreTarif[4] = $numTarif;
          $moreTarif[5] = $data['tarifs'][$numTarif]['title'];
         
          for($i=1;$i<=3;$i++){
          $text = $moreTarif[$i]['title'];
          preg_match('/\((.+)\)/', $text, $mounth);
          $moreTarif[0]['pay_period'] = "1 месяц";
          $moreTarif[$i]['pay_period'] = $mounth[1];

          }
          

              return $moreTarif;

  }
   //Конкретно выбранная линия какого то тарифа
    public static function getSelectTarif($numTarif, $select_line){
    $url = "C:/xampp/htdocs/test_json/data.json";
    $arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
     ),
    );  
          $json=file_get_contents($url, false, stream_context_create($arrContextOptions));
          $data = json_decode($json,true);

         if($numTarif == 0 && $select_line == 0){
          $select_line = 1;
         }elseif ($numTarif == 0 && $select_line == 1) {
           $select_line = 0;
         }
          $selectTarif[0] = $data['tarifs'][$numTarif]['tarifs'][$select_line];
          $selectTarif[1] = $data['tarifs'][$numTarif]['title'];
          

          if(($numTarif == 0 && $selectTarif[0]['ID'] == 2) || ($numTarif == 0 && $selectTarif[0]['ID'] == 3) || ($numTarif == 0 && $selectTarif[0]['ID'] == 4)){
          $text = $selectTarif[0]['title'];
          preg_match('/\((.+)\)/', $text, $mounth);
          $selectTarif[0]['pay_period'] = $mounth[1];
           }elseif ($numTarif == 0 && $selectTarif[0]['ID'] == 1) {
             $text = $selectTarif[0]['title'];
          preg_match('/\((.+)\)/', $text, $mounth);
          $selectTarif[0]['pay_period'] = "1 месяц";
           }
           if(($numTarif == 1 && $selectTarif[0]['ID'] == 6) || ($numTarif == 1 && $selectTarif[0]['ID'] == 7) || ($numTarif == 1 && $selectTarif[0]['ID'] == 8)){
          $text = $selectTarif[0]['title'];
          preg_match('/\((.+)\)/', $text, $mounth);
          $selectTarif[0]['pay_period'] = $mounth[1];
           }elseif ($numTarif == 1 && $selectTarif[0]['ID'] == 5) {
             $text = $selectTarif[0]['title'];
          preg_match('/\((.+)\)/', $text, $mounth);
          $selectTarif[0]['pay_period'] = "1 месяц";
           }
            if(($numTarif == 2 && $selectTarif[0]['ID'] == 10) || ($numTarif == 2 && $selectTarif[0]['ID'] == 11) || ($numTarif == 2 && $selectTarif[0]['ID'] == 12)){
          $text = $selectTarif[0]['title'];
          preg_match('/\((.+)\)/', $text, $mounth);
          $selectTarif[0]['pay_period'] = $mounth[1];
           }elseif ($numTarif == 0 && $selectTarif[0]['ID'] == 9) {
             $text = $selectTarif[0]['title'];
          preg_match('/\((.+)\)/', $text, $mounth);
          $selectTarif[0]['pay_period'] = "1 месяц";
           }

              return $selectTarif;

  }
    public static function getSelectDate($select_line){
           $pay_period = array();
           $pay_period_array = array('0' => "1 Month + 3 hours",'1' => "3 Month + 3 hours",'2' => "6 Month + 3 hours",'3' => "12 Month + 3 hours",);
           $pay_period[$select_line] = date("d.m.Y", strtotime($pay_period_array[$select_line]));

            return $pay_period;
 }



}



?>