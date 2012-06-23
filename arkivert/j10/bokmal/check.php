<?php
echo '<?xml version="1.0" encoding="iso-8859-1" ?>';
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1" />';
echo '<title>Joomla! - define-file checker</title>';
echo '</head>';
echo '<body>';


$language = define_list( 'norwegian.php' );
$english = define_list( 'english.php' );

$keys = array_unique( array_merge( array_keys($language), array_keys($english) ) );
asort( $keys );

echo '<table width="100%" border="0">';

foreach( $keys as $key ) {
	$lng1 = $language[$key];
	$lng2 = $english[$key];

	echo '<tr style="background-color: #dddddd;">';
	echo '<td style="font-size: 110%;">'.$key.'</td>';
	if( !isset($lng2) ) {
		echo '<td style="color: red" colspan="2">Utgått</td>';
	} elseif( !isset($lng1) ) {
		echo '<td style="color: red" colspan="2">Mangler</td>';
	} elseif( $lng1 == $lng2 ) {
		echo '<td valign=middle style="color: black;">'.$lng2.'</td>';
		echo '<td valign=middle style="color: red;">'.$lng1.'</td>';
	} else {
		echo '<td valign=middle style="color: black;">'.$lng2.'</td>';
		echo '<td valign=middle style="color: black;">'.$lng1.'</td>';
	}
	echo '</tr>';
}

echo '</table>';



echo '</body>';
echo '</html>';


function define_list( $file ) {
	$lines = file( $file );
	$defs = array();

	foreach( $lines as $line ) {
		$line = trim( $line );
		if( strpos( strtolower($line), '#' ) === 0 ) { continue; }
		if( strpos( strtolower($line), 'defined' ) === 0 ) { continue; }

		if( strpos(strtolower($line), 'define') === 0 ) {
			$line = trim(substr( $line, 6 )); # remove define
			$line = trim(substr( $line, 1 )); # remove (
			$line = trim(rtrim($line, ';' ));
			$line = trim(rtrim($line, ')' ));
		
			$line = split(',', $line, 2 );
			$line[0] = trim(trim($line[0]), "'\"");
			$line[1] = trim(trim($line[1]), "'\"");

			$defs[$line[0]] = $line[1];
		}
	}
	return $defs;
}

?>
