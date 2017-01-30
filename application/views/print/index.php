<?php
 // INCLUDE THE phpToPDF.php FILE

require("PHPtoPDF.php");

foreach ($print_info as $exam_item):

$firstname = $exam_item['first_name'];
$lastname = $exam_item['last_name'];
$ovnumber = $exam_item['ov_number'];
$date = $exam_item['date'];
$result = $exam_item['correct'];


// PUT YOUR HTML IN A VARIABLE
$my_html='<HTML>
<div>
	<h1 style="color:#5889d8;">Opleveren van een applicatie</h1>
	<div><p style="display:inline;padding:5px;margin-right:50px";>Proeve:</p></div>
	<div><p style="display:inline;padding:5px;margin-right:50px";>Crebo:</p>
	<p style="display:inline;padding:5px;margin-right:50px";>Cohort:</p></div>
	<div><p style="display:inline;padding:5px;margin-right:50px";>Kandidaat: '.$firstname.' '.$lastname.'</p>
	<p style="display:inline;padding:5px;margin-right:50px";>OV-Nummer: '.$ovnumber.'</p></div>
	<div><p style="display:inline;padding:5px;margin-right:50px";>Examinatoren:</p></div>
	<div><p style="display:inline;padding:5px;margin-right:50px";>Datum: '.$date.'</p></div>
	<div><p style="display:inline;padding:5px;margin-right:50px";>Resultaat:</p></div>
</div>
</HTML>';

// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => '',
  "file_name" => ''.$firstname.'_'.$ovnumber.'_exam.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);
endforeach;

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ('<meta http-equiv="refresh"
   content="0; url=../'.$firstname.'_'.$ovnumber.'_exam.pdf">"');
?>
