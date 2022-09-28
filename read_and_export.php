<?php
// Load the database configuration file
include_once 'db_conn.php';
if(isset($_POST['export'])){
  // Filter the excel data
  function filterData(&$str){
      $str = preg_replace("/\t/", "\\t", $str);
      $str = preg_replace("/\r?\n/", "\\n", $str);
      if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // Excel file name for download
  $fileName = "interventions-data_" . date('d-m-Y') . ".xls";

  // Column names
  $fields = array('id demande', 'matricule', 'nom complet', 'date', 'systeme d information', 'autre', 'description', 'type','statut','autre type');

  // Display column names as first row
  $excelData = implode("\t", array_values($fields)) . "\n";

  // Fetch records from database
  $query = $conn->query("SELECT * FROM demandes ORDER BY idDemande ASC");
  if($query->num_rows > 0){
      // Output each row of the data
      while($row = $query->fetch_assoc()){
          // $status = ($row['status'] == 1)?'Active':'Inactive';
          $lineData = array_map("utf8_decode",array($row['idDemande'], $row['idUser'], $row['nomComplet'], $row['date'], $row['SI'], $row['autre'], $row['description'], $row['type'],$row['statut'],$row['autreType']));
          array_walk($lineData, 'filterData');
          $excelData .= implode("\t", array_values($lineData)) . "\n";
      }
  }else{
      $excelData .= 'No records found...'. "\n";
  }

  // Headers for download
  header("Content-Type: application/vnd.ms-excel; charset=utf-8");
  header("Content-Disposition: attachment;charset=utf-8; filename=\"$fileName\"");

  // Render excel data
  echo $excelData;

  exit;

}
