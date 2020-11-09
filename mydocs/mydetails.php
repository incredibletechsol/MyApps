<?php
 include('logincommon.php'); 
 include('classes/crud.php');
?>
	
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>My Details</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>
 
<script src="js/demo-rtl.js"></script>
 
 
<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>
 
<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>
 
<link rel="stylesheet" type="text/css" href="css/libs/dataTables.fixedHeader.css">
<link rel="stylesheet" type="text/css" href="css/libs/dataTables.tableTools.css">
<script type="text/javascript" src="js/customalert.js"></script>
<link rel="stylesheet" type="text/css" href="css/customalert.css" />
<link rel="stylesheet" href="css/default.css" type="text/css"> 
</head>
<body>

<div id="theme-wrapper">
<?php include('header.php'); ?>
	<div id="page-wrapper" class="container">
		<div class="row">
			<?php include('leftsidebar.php'); ?>
		</div>
		<div id="content-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<h1>My Details</h1>
						
							<div align="right">	
							
							</div>	
						</div>
					</div>
					

					<div class="row">
						<div class="col-lg-12">
							<div class="main-box clearfix">
								<div class="main-box-body clearfix">
									<div class="table-responsive">
									<h2>Provident Fund ::    </h2>
									<table id='table-example-fixed' class='table table-hover'>
                                        <thead>
                                        <tr>
                                        <th>Sr.No</th>
                                        <th>Member Id</th>
                                        <th>Establishment Name </th>
                                        <th>Establishment ID </th>
                                        <th>DOJ EPF</th>
                                        <th>DOE EPF</th>
                                        <th>DOJ EPS</th>
                                        <th>DOE EPS</th>
                                        <th>DOJ FPS</th>
                                        <th>DOE FPS</th></tr></thead>
                                        <tbody>
                                        <tr class="odd">
                                        <td>1</td>
                                        <td style="text-align: left;">MHBAN00484750000382231</td>
                                        <td style="width:80%; text-align: left;">TATA CONSULTANCY SERVICES LIMITED</td>
                                        <td style="width:100%; text-align: left;">MHBAN0048475000</td>
                                        <td style="text-align: left;">08/01/2014</td>
                                        <td style="text-align: left;">30/06/2015</td>
                                        <td style="text-align: left;">08/01/2014</td>
                                        <td style="text-align: left;">30/06/2015</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td></tr>
                                        <tr class="even">
                                        <td>2</td>
                                        <td style="text-align: left;">PYBOM00113940000226798</td>
                                        <td style="width:80%; text-align: left;">WIPRO LIMITED - TECHNOLOGIES GROUP</td>
                                        <td style="width:100%; text-align: left;">PYBOM0011394000</td>
                                        <td style="text-align: left;">01/07/2015</td>
                                        <td style="text-align: left;">04/10/2017</td>
                                        <td style="text-align: left;">01/07/2015</td>
                                        <td style="text-align: left;">04/10/2017</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td></tr>
                                        <tr class="odd">
                                        <td>3</td>
                                        <td style="text-align: left;">PUPUN003164300E0186848</td>
                                        <td style="width:80%; text-align: left;">CAPGEMINI TECHNOLOGY SERVICES INDIA LIMITED</td>
                                        <td style="width:100%; text-align: left;">PUPUN003164300E</td>
                                        <td style="text-align: left;">05/10/2017</td>
                                        <td style="text-align: left;">30/09/2018</td>
                                        <td style="text-align: left;">05/10/2017</td>
                                        <td style="text-align: left;">30/09/2018</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td></tr>
                                        <tr class="even">
                                        <td>4</td>
                                        <td style="text-align: left;">TNMAS00311400000126278</td>
                                        <td style="width:80%; text-align: left;">POLARIS CONSULTING AND SERVICES LTD</td>
                                        <td style="width:100%; text-align: left;">TNMAS0031140000</td>
                                        <td style="text-align: left;">13/08/2018</td>
                                        <td style="text-align: left;">06/12/2019</td>
                                        <td style="text-align: left;">13/08/2018</td>
                                        <td style="text-align: left;">06/12/2019</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td></tr>
                                        <tr class="odd">
                                        <td>5</td>
                                        <td style="text-align: left;">TNMAS00313090001808568</td>
                                        <td style="width:80%; text-align: left;">COGNIZANT TECHNOLOGY SOLUTIONS INDIA PRIVATE LTD</td>
                                        <td style="width:100%; text-align: left;">TNMAS0031309000</td>
                                        <td style="text-align: left;">09/12/2019</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td>
                                        <td style="text-align: left;">09/12/2019</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td>
                                        <td style="text-align: left;">NOT AVAILABLE</td></tr></tbody></table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							<div class="main-box clearfix">
								<div class="main-box-body clearfix">
									<div class="table-responsive">
									<h2>Profession Details ::    </h2>
									<table id='table-example-fixed1' class='table table-hover'>
                                        <thead>
                                        <tr>
                                        <th>Sr.No</th>
                                        <th>Company Name</th>
                                        <th>Employee Id</th>
                                        <th>DOJ</th>
                                        <th>DOE</th>
                                        <th>Address</th>
                                        <th>Company Contact No</th>
                                        <th>Manager Name</th>
                                        <th>Manager Contact No</th>
                                        <th>Manager Email Id</th></tr></thead>
                                        <tbody>
                                                <tr class="odd">
                                                <td>1</td>
                                                <td style="width:80%; text-align: left;">TATA CONSULTANCY SERVICES LIMITED</td>
                                                <td style="text-align: left;">818485</td>
                                  
                                                <td style="text-align: left;">08/01/2014</td>
                                                <td style="text-align: left;">30/06/2015</td>
                                                <td style="text-align: left;"> Sahyadri Park, Plot No. 2 & 3, Phase 3, Rajiv Gandhi Infotech Park, Maan, Hinjawadi, Pune, Maharashtra 411057</td>
                                                <td style="text-align: left;">70838 18977</td>
                                                <td style="text-align: left;">NOT AVAILABLE</td>
                                                <td style="text-align: left;">NOT AVAILABLE</td>
                                                <td style="width:100%; text-align: left;">NOT AVAILABLE</td>
                                                </tr>
                                                <tr class="even">
                                                <td>2</td>
                                                <td style="text-align: left;">WIPRO LIMITED - TECHNOLOGIES GROUP</td>
                                                <td style="width:80%; text-align: left;">322542</td>
                                                <td style="text-align: left;">01/07/2015</td>
                                                <td style="text-align: left;">04/10/2017</td>
                                                <td style="text-align: left;">Wipro, Hinjawadi Phase II, Hinjewadi Rajiv Gandhi Infotech Park, Hinjawadi, Pune, Maharashtra 411057</td>
                                                <td style="text-align: left;"> 020 3028 6664</td>
                                                <td style="text-align: left;">Pradipta Bhattacharya</td>
                                                <td style="text-align: left;"> 020 3028 6664</td>
                                                <td style="text-align: left;">pradipta.bhattacharya@wipro.com</td>
                                                </tr>
                                                <tr class="odd">
                                                <td>3</td>
                                                <td style="text-align: left;">CAPGEMINI TECHNOLOGY SERVICES INDIA LIMITED</td>
                                                <td style="width:80%; text-align: left;">138947</td>
                                                <td style="text-align: left;">05/10/2017</td>
                                                <td style="text-align: left;">10/08/2018</td>
                                                <td style="text-align: left;">Rajiv Gandhi Infotech Park, Plot No.14, Phase III MIDC SEZ, Village Man Taluka Mulshi, Haveli, Pune, Maharashtra 411057</td>
                                                <td style="text-align: left;">020 6699 1000</td>
                                                <td style="text-align: left;">Sandeep Mane</td>
                                                <td style="text-align: left;">020 6699 1000</td>
                                                <td style="text-align: left;">sandeep.mane@capgemini.com</td>
                                                </tr>
                                                <tr class="even">
                                                <td>4</td>
                                                <td style="text-align: left;">VIRUSA POLARIS CONSULTING AND SERVICES LTD</td>
                                                <td style="width:80%; text-align: left;">8051029</td>
                                                <td style="text-align: left;">13/08/2018</td>
                                                <td style="text-align: left;">06/12/2019</td>
                                                <td style="text-align: left;">Plot No. 1, Survey No. 77, Unit No. 502, Wing 3, Cluster D, 5th Floor, EON Free Zone, MIDC Kharadi Knowledge Park, Pune, Maharashtra 411014/td>
                                                <td style="text-align: left;">020 4073 4000</td>
                                                <td style="text-align: left;">Lalatendu Guru</td>
                                                <td style="text-align: left;"> 020 4073 4000</td>
                                                <td style="text-align: left;">lalatendu.guru@virtusa.com</td>
                                                </tr>
                                                <tr class="odd">
                                                <td>5</td>
                                                <td style="width:80%; text-align: left;">COGNIZANT TECHNOLOGY SOLUTIONS INDIA PRIVATE LTD</td>
                                                <td style="width:100%; text-align: left;">266002</td>
                                                <td style="text-align: left;">09/12/2019</td>
                                                <td style="text-align: left;">NOT AVAILABLE</td>
                                                <td style="text-align: left;"> 281, Hinjawadi Phase 2 Rd, Phase 2, Hinjewadi Rajiv Gandhi Infotech Park, Hinjawadi, Pimpri-Chinchwad, Maharashtra 411057</td>
                                                <td style="text-align: left;">020 4021 6000</td>
                                                <td style="text-align: left;">Neeraj Jetty</td>
                                                <td style="text-align: left;">020 4021 6000</td>
                                                <td style="text-align: left;">neeraj.jetty@cognizant.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>	
			</div>
		</div>
	</div>
</div>




<?php include('settings.php'); ?>
  
<script src="js/demo-skin-changer.js"></script>  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>  
 
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.fixedHeader.js"></script>
<script src="js/dataTables.tableTools.js"></script>
<script src="js/jquery.dataTables.bootstrap.js"></script>
 
<script src="js/scripts.js"></script>
<script src="js/pace.min.js"></script>
 
<script>
$(document).ready(function() {
	
	
	var tableFixed = $('#table-example-fixed').dataTable({
		'info': false,
		'pageLength': 10
	});
	
	new $.fn.dataTable.FixedHeader( tableFixed );
	
		var tableFixed1 = $('#table-example-fixed1').dataTable({
		'info': false,
		'pageLength': 10
	});
	
	new $.fn.dataTable.FixedHeader( tableFixed1 );
});
</script>
 <script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>
</body>
</html>