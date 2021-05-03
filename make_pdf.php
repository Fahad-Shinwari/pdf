<?php

	if(!empty($_POST['submit'])){
		$title = $_POST['title'];
		$familyname = $_POST['familyname'];
		$givennames = $_POST['givennames'];
		$fathername = $_POST['fathername'];
		$dob = $_POST['dob'];
		$countryofbirth = $_POST['countryofbirth'];
		$maritalstatus = $_POST['maritalstatus'];
		$gender = $_POST['gender'];
		$child = $_POST['child'];
		$countryofresidence = $_POST['countryofresidence'];
		$nationality = $_POST['nationality'];
		$othernationalities = $_POST['othernationalities'];
		$visatype = $_POST['visatype'];
		$purposeofjourney = $_POST['purposeofjourney'];
		$entrydate = $_POST['entrydate'];

		$durationofstay = $_POST['durationofstay'];
		$pointofentry = $_POST['pointofentry'];
		$numberofchildren = $_POST['numberofchildren'];
		$placesinafghanistan = $_POST['placesinafghanistan'];
		$completeaddress = $_POST['completeaddress'];

		$visitedafghanistan = $_POST['visitedafghanistan'];
		$appliedvisa = $_POST['appliedvisa'];
		$criminalrecord = $_POST['criminalrecord'];
		$currentaddress = $_POST['currentaddress'];
		$emailaddress = $_POST['emailaddress'];
		$mobile = $_POST['mobile'];

		$passporttype = $_POST['passporttype'];
		$passportnumber = $_POST['passportnumber'];
		$placeofissue = $_POST['placeofissue'];
		$issuedate = $_POST['issuedate'];
		$expirydate = $_POST['expirydate'];
		$currentoccupation = $_POST['currentoccupation'];

		$employername = $_POST['employername'];
		$employeraddress = $_POST['employeraddress'];
		$previousemployername = $_POST['previousemployername'];
		$previousemployeraddress = $_POST['previousemployeraddress'];



		require('TCPDF/tcpdf.php');
		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$pdf->setFooterData("array(0,64,0), array(0,64,128)");
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		
		$pdf->setFont('dejavusans', '', 11, '', true);
		$pdf->AddPage();
		$html = <<<EOF
		<style>
		.aligncenter {
			text-align: center;
			padding-bottom:100px;
		}

		img{
			width: 1580%;
		}
			
		</style>
		<p class="aligncenter">
			<img src="img/logo.png" />
		</p>
		
		EOF;
		// output the HTML content
		$pdf->writeHTML($html);

		$tbl = <<<EOD
		<!-- EXAMPLE OF CSS STYLE -->
		<style>
		h1{
			text-align:center;
			font-size:18px;
		}
		table{
			font-size:8px;
			line-height:28px;
		}
		th{
			background-color:#ccc;
			padding-left:15px;
			font-weight: bold;
		}	
			
		</style>

		<h1>Visa Application Form</h1>
		<table border="1" cellpadding="2" cellspacing="1">
		 <tr nobr="true">
		  <th>PERSONAL DETAILS</th>
		  <th>VISA DETAILS</th>
		 </tr>
		 <tr nobr="true">
		  <td>Title: &nbsp;&nbsp; $title </td>
		  <td>Visa Type: &nbsp;&nbsp; $visatype</td>
		 </tr>
		 <tr nobr="true">
		 <td>Family Name: &nbsp;&nbsp; $familyname</td>
		 <td>Purpose of Journey: &nbsp;&nbsp; $purposeofjourney</td>
		 </tr>

		 <tr nobr="true">
		 <td>Given Names: &nbsp;&nbsp; $givennames</td>
		 <td>Entry Date: &nbsp;&nbsp; $entrydate</td>
		 </tr>

		 <tr nobr="true">
		 <td>Father\'s Full Name: &nbsp;&nbsp; $fathername</td>
		 <td>Intended Duration of Stay(days): &nbsp;&nbsp; $durationofstay</td>
		 </tr>

		 <tr nobr="true">
		 <td>Date of Birth: &nbsp;&nbsp; $dob</td>
		 <td>Point of Entry: &nbsp;&nbsp; $pointofentry</td>
		 </tr>

		 <tr nobr="true">
		 <td>Counrty of Birth: &nbsp;&nbsp; $countryofbirth</td>
		 <td>Number of Children Accompanied: &nbsp;&nbsp; $numberofchildren</td>
		 </tr>

		 <tr nobr="true">
		 <td>Marital Status: &nbsp;&nbsp; $maritalstatus</td>
		 <td>Places in Afghanistan Intended to Visit: &nbsp;&nbsp; $placesinafghanistan</td>
		 </tr>

		 <tr nobr="true">
		 <td>Gender: &nbsp;&nbsp; $gender</td>
		 <td>Complete Address in Afghanistan: &nbsp;&nbsp; $completeaddress</td>
		 </tr>

		 <tr nobr="true">
		 <td>Child(Under 18 Years): &nbsp;&nbsp; $child</td>
		 <td>Have You Ever Visited Afghanistan Before? If Yes Provide Details: &nbsp;&nbsp; $visitedafghanistan</td>
		 </tr>

		 <tr nobr="true">
		 <td>Country Of Residence: &nbsp;&nbsp; $countryofresidence</td>
		 <td>Have You Ever Applied for an Afghanistan Visa Before? If Yes Provide Details: &nbsp;&nbsp; $appliedvisa</td>
		 </tr>

		 <tr nobr="true">
		 <td>Nationality: &nbsp;&nbsp; $nationality</td>
		 <td>Do you have a criminal record? If yes provide details: &nbsp;&nbsp; $criminalrecord</td>
		 </tr>

		 <tr nobr="true">
		 <td>Other Nationalities: &nbsp;&nbsp; $othernationalities</td>
		 </tr>

		 <tr nobr="true">
		  <th>CONTACT DETAILS</th>
		  <th>PASSPORT DETAILS</th>
		 </tr>

		 <tr nobr="true">
		 <td>Current Address: &nbsp;&nbsp; $currentaddress</td>
		 <td>Passport Type: &nbsp;&nbsp; $passporttype</td>
		 </tr>

		 <tr nobr="true">
		 <td>Email Address: &nbsp;&nbsp; $emailaddress</td>
		 <td>Passport Number: &nbsp;&nbsp; $passportnumber</td>
		 </tr>

		 <tr nobr="true">
		 <td>Mobile: &nbsp;&nbsp; $mobile</td>
		 <td>Place of Issue: &nbsp;&nbsp; $placeofissue</td>
		 </tr>

		 <tr nobr="true">
		 <th>EMPLOYMENT DETAILS</th>
		 <td>Issue Date: &nbsp;&nbsp; $issuedate</td>
		 </tr>

		 <tr nobr="true">
		 <td>Current Occupation: &nbsp;&nbsp; $currentoccupation</td>
		 <td>Expiry Date: &nbsp;&nbsp; $expirydate</td>
		 </tr>

		 <tr nobr="true">
		 <td>Employer's Name: &nbsp;&nbsp; $employername</td>
		 <td>I declare that the information provided in this application is true and correct: &nbsp;&nbsp; Fahad</td>
		 </tr>

		 <tr nobr="true">
		 <td>Employer's Address: &nbsp;&nbsp; $employeraddress</td>
		 <td>Passport Photograph(Please attach within the box below):</td>
		 </tr>

		 <tr nobr="true">
		 <td>Previous Employer's Name: &nbsp;&nbsp; $previousemployername</td>
		<td style="height: 100px">
		 <table>
		   <tr>
		     <td style="border-right: 1px solid #000;line-height: 100px;">Please Attach Photo Here</td>
			 <td>Guarantor must endorse the photo.<br />
			 This is a true photo of (name of application)
			 (signature of gurantor)</td>
		   </tr>
		 </table>
		</td>
		 </tr>

		 <tr  nobr="true">
		 <td>Previous Employer's Address: &nbsp;&nbsp; $previousemployeraddress</td>
		 </tr>

		 <tr nobr="true">
		 <td>
		 <table>
		 <tr>
		 <td style="border-right: 1px solid #000;line-height: 10px;">Signature (Please Sigin within the box)</td>
		 <td></td>
		 </tr>
		 </table>
		 </td>
		 <td>NOTE: THE PHOTOGRAPH MUST COMPLY WITH THE ATTACHED</td>
		 </tr>
		</table>
		EOD;
		
		$pdf->writeHTML($tbl, true, false, false, false, '');
		

		$pdf->Output('test.pdf', 'I');

	}
?>


