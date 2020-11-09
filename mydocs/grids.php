<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
 
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	<link href="vendors/datatables.net-bs/css/buttons.dataTables.min.css" rel="stylesheet">
   <link href="vendors/datatables.net-bs/css/bootstrap-select.css" rel="stylesheet">
  </head>
<body>
<br><br>
 <div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">

	  <div class="x_content">
	
		
		
		 <?php
		 
		
		
			$db = new Database();
			$db->connect();
			$db->select('tbl_friends','*',NULL,NULL,NULL,NULL); 
			$rs = $db->getResult();
			echo "<table id='datatable-buttons' class='table table-striped table-bordered'>";
			echo "<thead>";
				echo "<tr>";
			    //	echo "<th>Photo</th>";
					echo "<th>Name</th>";
					echo "<th>Mobile No</th>";
					echo "<th>Email Id</th>";
					echo "<th>Birth Date</th>";
					echo "<th>Annv Date</th>";
					echo "<th>Special</th>";
					echo "<th>Edit</th>";
					echo "<th>Delete</th>";
				echo "</tr>";
			echo "</thead>";
			echo "<tfoot>";
				echo "<tr>";
				//	echo "<th>Photo</th>";
					echo "<th>Name</th>";
					echo "<th>Mobile No</th>";
					echo "<th>Email Id</th>";
					echo "<th>Birth Date</th>";
					echo "<th>Annv Date</th>";
					echo "<th>Special</th>";
					echo "<th>Edit</th>";
					echo "<th>Delete</th>";
				echo "</tr>";
			echo "</tfoot>";
		
			echo "<tbody>";
				foreach($rs as $x) 
					{
					 echo "<tr>";  
						 $id=$x['id'];
						//echo  "<td><img src='img/kajal.jpg' width='150' height='150'></td>";   
						 echo  "<td>". $x['name']."</td>";
						 echo  "<td>". $x['mobileno']."</td>";
						 echo  "<td>". $x['emailid']."</td>";
						 echo  "<td>". $x['birthdate']."</td>";
						 echo  "<td>". $x['annvdate']."</td>";
						 echo  "<td>". $x['isSpecial']."</td>";
						 echo  "<td><a href='myfriends.php?id=$id&msg=editfriend'><img src='img/edit.png'></a></td>";
						 echo  "<td><a href='myfriendactions.php?id=$id&msg=deletefriend'><img src='img/cross.png'></a></td>";
					echo "</tr>"; 
					}
			echo "</tbody>";  
			echo "</table>";
		
			?>
	
	  </div>
	</div>
  </div>


    <!-- jQuery -->
 
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
 
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
	 <script src="vendors/datatables.net-bs/js/buttons.colVis.min.js"></script>

	
		<!-- Select Plugin Js -->
    <script src="vendors/datatables.net/js/bootstrap-select.js"></script>
	
	<!-- Editable Table Plugin Js -->
    <script src="vendors/datatables.net/js/mindmup-editabletable.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Blfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
				
              ],
              responsive: true,
			  pageLength : 10,
			  "sPaginationType": "full_numbers",
			   "aLengthMenu": [[10, 25,40, 50, -1], [10, 25, 40,50, "All"]],

            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        TableManageButtons.init();
		
			 // Setup - add a text input to each footer cell
		$('#datatable-buttons tfoot th').each( function () {
			var title = $(this).text();
			if(title !== "Edit" || title !== "Delete")
				$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
		} );
		
		 // DataTable
		var table = $('#datatable-buttons').DataTable();
	 
		// Apply the search
		table.columns().every( function () {
			var that = this;
	 
			$( 'input', this.footer() ).on( 'keyup change', function () {
				if ( that.search() !== this.value ) {
					that
						.search( this.value )
						.draw();
				}
			} );
		} );
		
		$('#datatable-buttons tbody').on( 'click', 'tr', function () {
	
        if ( $(this).hasClass('active') ) {

            $(this).removeClass('active');
        }
        else {

            table.$('tr.active').removeClass('active');
            $(this).addClass('active');
        }
    } );
	
	
	
	
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>