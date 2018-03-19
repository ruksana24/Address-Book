<?php
  include 'auth.php';

    include 'dbConnect.php';



    if(isset($_POST['download_csv'])) {

    $filename = "Contact_Information.csv";
    $conn = fopen('php://output', 'w');


 $header = array(
        'Full Name',
        'Nick Name',
        'Birthdate',
        'Web Site',
        'Address',
        'Phone',
    
    );

    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename='.$filename);
    fputcsv($fp, $header);

    $csv_sql = "SELECT fullName,nickName,birthDate,webSite,address,phone FROM address-book where userId = '$id'";

    
$csv_result = $conn->query($csv_sql);
    
        while($row = $csv_result->fetch_assoc()) {
        fputcsv($fp, $row);
    }
    }
    

    include 'dbDisconnect.php';

?>