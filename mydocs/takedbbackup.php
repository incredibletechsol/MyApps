<?
error_reporting(0);
take_backup_tables('localhost','dkkkpmba_mba','Incr254@#$','dkkkpmba_mba','*','/home/dkkkpmba/public_html/database/');
take_backup_tables('localhost','dkkkpmba_bpp','Kasturi12#$','dkkkpmba_bpp','*','/home/dkkkpmba/public_html/dkkkpbpp.com/database/');
take_backup_tables('localhost','dkkkpmba_iti','Kasturi12#$','dkkkpmba_iti','*','/home/dkkkpmba/public_html/dkkkpitikalamb.com/database/');
take_backup_tables('localhost','dkkkpmba_svems','Kasturi12#$','dkkkpmba_svems','*','/home/dkkkpmba/public_html/dkkkpsvems.com/database/');
take_backup_tables('localhost','dkkkpmba_spc','Kasturi12#$','dkkkpmba_spc','*','/home/dkkkpmba/public_html/dkkkpjrclscikalamb.com/database/');

take_backup_tables('localhost','dkkkpmba_website_clients_user','Kasturi254@#$','dkkkpmba_myapps','*','/home/dkkkpmba/public_html/MyApps/mydocs/database/');
take_backup_tables('localhost','dkkkpmba_website_clients_user','Kasturi254@#$','dkkkpmba_ihsdpsatara','*','/home/dkkkpmba/public_html/ihsdpsatara.com/database/');
take_backup_tables('localhost','dkkkpmba_website_clients_user','Kasturi254@#$','dkkkpmba_website_clients','*','/home/dkkkpmba/public_html/constroqchecklab.com/database/');
take_backup_tables('localhost','dkkkpmba_kasturi','Kasturi12#$','dkkkpmba_kasturicollection','*','/home/dkkkpmba/public_html/kasturicollection.com/database/');
take_backup_tables('localhost','dkkkpmba_kasturi','Kasturi12#$','dkkkpmba_kasturicollectionmultiseller','*','/home/dkkkpmba/public_html/kasturicollection.com/multivendor/database/');
take_backup_tables('localhost','dkkkpmba_kasturi','Kasturi12#$','dkkkpmba_vinayakelec','*','/home/dkkkpmba/public_html/vinayakelectrical.in/database/');

/* backup the db OR just a table */
function take_backup_tables($host,$user,$pass,$name,$tables = '*',$path)
{
	
	$link = mysqli_connect($host,$user,$pass,$name);
	//mysql_select_db($name,$link);
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysqli_query($link,'SHOW TABLES');
		while($row = mysqli_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysqli_query($link,'SELECT * FROM '.$table);
		$num_fields = mysqli_num_fields($result);
		
		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysqli_fetch_row(mysqli_query($link,'SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysqli_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j < $num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = preg_replace("/\n/","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j < ($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	
	//save file
	$handle = fopen($path.$name.'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
}

?>