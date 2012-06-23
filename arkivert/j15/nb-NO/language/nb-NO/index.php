<?php
/*
 * v2.0.2 - 25. juli 
 *  - Show the name of the tag correctly, with apersand, and not the under score used before
 *
 * v2.0.1 - 18. juli 
 *  - The string --- in the translation is considered an untranslated string
 *
 * v2 - 17. juli 2006
 *  - Selectable to show missing/deprecated/not translated
 */

echo '<?xml version="1.0" encoding="utf-8" ?>';
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html;  charset=UTF-8" />';
echo '<title>Joomla! - INI-file checker</title>';
echo '</head>';
echo '<body>';

?>

<form action="index.php" method="get" name="FormName">
<input type="checkbox" name="missing" value="1" />Missing  
<input type="checkbox" name="deprecated" value="1" />Deprecated  
<input type="checkbox" name="nottranslated" value="1" />Not translated  
<input type="submit" name="submit" value="Send" />
</form>
<?php
global $missing, $deprecated, $nottranslated, $showall;
$missing = isset($_GET['missing']);
$deprecated = isset($_GET['deprecated']);
$nottranslated = isset($_GET['nottranslated']);
$showall = !($missing || $deprecated || $nottranslated );
if( $showall ) {
	$missing = true;
	$deprecated = true;
	$nottranslated = true;
}

$dir =  dirname( __FILE__ );
$dir = explode(DIRECTORY_SEPARATOR, $dir );

$lang = $dir[count($dir)-1];

$inifiles_eng = array();
$inifiles_nor = array();
$inifiles = array();

// find the en-GB ini-files
$dh = opendir( '../en-GB' );
while($file = readdir( $dh )) {
	if(preg_match('/\.ini$/', $file)) {
		$inifiles_eng[] = str_replace( 'en-GB.', '', $file );
		$inifiles[] = str_replace( 'en-GB.', '', $file );
	}
}
closedir( $dh );

// find the ini-files to check
$dh = opendir( './' );
while($file = readdir( $dh )) {
	if(preg_match('/\.ini$/', $file)) {
		$inifiles_nor[] = str_replace( "$lang.", '', $file );
		$inifiles[] = str_replace( "$lang.", '', $file );
	}
}
closedir( $dh );

// create a array of unique files
$inifiles = array_unique( $inifiles );
sort( $inifiles );

echo '<table width="100%" border="0">';

foreach( $inifiles as $file ) {
	if( !in_array( $file, $inifiles_eng ) ) {
		echo "<tr><td colspan=4><span style=\"font-size: large;\">$lang.$file</span>&nbsp;&nbsp;&nbsp;<span style=\"color: red;\">Deprecated</span></td></tr>\n";
		echo "<tr><td colspan=4><span style=\"font-size: large;\"><br/></span></td></tr>\n";
	} elseif( !in_array( $file, $inifiles_nor ) ) {
		echo "<tr><td colspan=4><span style=\"font-size: large;\">$lang.$file</span>&nbsp;&nbsp;&nbsp;<span style=\"color: red;\">Missing</span></td></tr>\n";
		echo "<tr><td colspan=4><span style=\"font-size: large;\"><br/></span></td></tr>\n";
	} else {
		ob_start();
		check_file( $file );
		$buff = ob_get_contents();
		ob_clean();
		
		if( $buff ) {
			echo "<tr><td style=\"border: 1px black solid\" colspan=4><span style=\"font-size: large;\">$lang.$file</span></td></tr>\n";
			echo $buff;
			echo "<tr><td colspan=4><span style=\"font-size: large;\"><br/></span></td></tr>\n";
		}
	}
	
}

echo '</table>';


function check_file( $file ) {
	global $missing, $deprecated, $nottranslated, $showall;
	global $lang;
	
	$lines_eng = file( "../en-GB/en-GB.$file" );
	$lines_nor = file( "$lang.$file" );
	
	$definitions_eng = array();
	$definitions_nor = array();
	$definitions = array();
	
	
	foreach( $lines_nor as $lnum => $line ) {
		$line = trim($line);
		if( (preg_match( '/^#/', $line ) == false) & (preg_match('/=..*/', $line) == true) ) {
			$parts = split('=', $line, 2);
			
			//$parts[0] = str_replace('&', '_', $parts[0]);
			//$parts[0] = str_replace('"', '-', $parts[0]);
			//$parts[0] = str_replace('>', '-', $parts[0]);
			$parts[0] = htmlentities(strtoupper($parts[0]));
						
			$definitions_nor[$parts[0]] = $parts[1];
			$lines_nor[$parts[0]] = ($lnum + 1);
			$definitions[] = $parts[0];
		}
	}

	foreach( $lines_eng as $line ) {
		$line = trim($line);
		if( (preg_match( '/^#/', $line ) == false) & (preg_match('/=..*/', $line) == true) ) {
			$parts = split('=', $line, 2);
			
			//$parts[0] = str_replace('&', '_', $parts[0]);
			//$parts[0] = str_replace('"', '-', $parts[0]);
			//$parts[0] = str_replace('>', '-', $parts[0]);
			$parts[0] = htmlentities(strtoupper($parts[0]));
						
			$definitions_eng[$parts[0]] = $parts[1];
			$definitions[] = $parts[0];
		}
	}
	
	$definitions = array_unique( $definitions );
	sort( $definitions );
		
	foreach( $definitions as $def ) {
		//$def = htmlentities( $def );
		
		if( !array_key_exists( $def, $definitions_eng ) ) {
			if( $deprecated ) {
				echo "<tr style=\"background-color: #dddddd;\">\n";
				echo "  <td width=\"10\">".$lines_nor[$def]."</td>\n";
				echo "  <td style=\"font-size: 110%;\">$def</td>\n";
				echo "  <td colspan=2 style=\"color: red;\">Deprecated</td>\n";
				echo "</tr>\n";
			}
		} elseif( !array_key_exists( $def, $definitions_nor ) ) {
			if( $missing )  {
				echo "<tr style=\"background-color: #dddddd;\">\n";
				echo "  <td width=\"10\"></td>\n";
				echo "  <td style=\"font-size: 110%;\">$def</td>\n";
				echo "  <td colspan=2 style=\"color: red;\">Missing</td>\n";
				echo "</tr>\n";
			}
		} elseif( ($definitions_eng[$def] == $definitions_nor[$def]) || ($definitions_nor[$def] == '---') ) {
			$color = 'red';
			if( $nottranslated )  {
				echo "<tr style=\"background-color: #dddddd;\">\n";
				echo "  <td width=\"10\">".$lines_nor[$def]."</td>\n";
				echo "  <td style=\"font-size: 110%;\">$def</td>\n";
				echo "  <td valign=middle style=\"color: $color;\">".$definitions_eng[$def]."</td>\n";
				echo "  <td valign=middle style=\"color: $color;\">".$definitions_nor[$def]."</td>\n";
				echo "</tr>\n";
			}
		} else {
			$color = 'black';
			if( $showall ) {
				echo "<tr style=\"background-color: #dddddd;\">\n";
				echo "  <td width=\"10\">".$lines_nor[$def]."</td>\n";
				echo "  <td style=\"font-size: 110%;\">$def</td>\n";
				echo "  <td valign=middle style=\"color: $color;\">".$definitions_eng[$def]."</td>\n";
				echo "  <td valign=middle style=\"color: $color;\">".$definitions_nor[$def]."</td>\n";
				echo "</tr>\n";
			}
		}
	}
	
}

echo '</body>';
echo '</html>';
?>
