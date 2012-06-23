<?php
echo '<?xml version="1.0" encoding="iso-8859-1" ?>';
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html;  charset=utf-8" />';
echo '<title>TinyMCE! - Language file checker</title>';
echo '</head>';
echo '<body>';

$lang1 = 'en';
$lang2 = 'nb';

$files_js1 = array();
$files_js2 = array();

$base = dirname( __FILE__ );

findLngFiles( $base );

checkJsLngFiles();

/*
echo "<pre>";
print_r( $files_js1 );
print_r( $files_js2 );
echo "</pre>";
*/

echo '</body>';
echo '</html>';


function checkJsLngFiles() {
	global $files_js1, $files_js2, $base;
	global $lang1, $lang2;
	
	$files = array();
	
	foreach( $files_js1 as $key => $file ) {
		$tmp = str_replace( $base . DIRECTORY_SEPARATOR, '', dirname( $file ) . DIRECTORY_SEPARATOR );
		$files_js1[$key] = $tmp;
	}
	
	foreach( $files_js2 as $key => $file ) {
		$tmp = str_replace( $base . DIRECTORY_SEPARATOR, '', dirname( $file ) . DIRECTORY_SEPARATOR );
		$files_js2[$key] = $tmp;
	}
	
	$files = array_unique( array_merge( $files_js1, $files_js2 ) );
	
	/*
	echo "<pre>";	
	print_r( $files );
	echo "</pre>";
	*/
	
	
	echo '<table width="100%" border="0">';

	foreach( $files as $file ) {
		if( !in_array( $file, $files_js1 ) ) {
			echo "<tr><td colspan=4><span style=\"font-size: large;\">$file$lang2.js</span>&nbsp;&nbsp;&nbsp;<span style=\"color: red;\">Deprecated</span></td></tr>\n";
		} elseif( !in_array( $file, $files_js1 ) ) {
			echo "<tr><td colspan=4><span style=\"font-size: large;\">$file$lang2.js</span>&nbsp;&nbsp;&nbsp;<span style=\"color: red;\">Missing</span></td></tr>\n";
		} else {
			echo "<tr><td style=\"border: 1px black solid\" colspan=4><span style=\"font-size: large;\">$file$lang2.js</span></td></tr>\n";
			checkJsLngFile( "$file$lang1.js", "$file$lang2.js" );
		}
		echo "<tr><td colspan=4><span style=\"font-size: large;\"><br/></span></td></tr>\n";
	}
	echo '</table>';
}

function checkJsLngFile( $file1, $file2 ) {
	
	$language = defineListJs( $file2 );
	$english = defineListJs( $file1 );

	$keys = array_unique( array_merge( array_keys($language), array_keys($english) ) );
	asort( $keys );

	foreach( $keys as $key ) {
		$lng1 = @$language[$key];
		$lng2 = @$english[$key];

		echo '<tr style="background-color: #dddddd;">';
		echo '<td style="font-size: 110%;">'.$key.'</td>';
		if( !isset($lng2) ) {
			echo '<td style="color: red" colspan="2">Deprecated</td>';
		} elseif( !isset($lng1) ) {
			echo '<td style="color: red" colspan="2">Missing</td>';
		} else {
			$color = ($lng1 == $lng2)? 'red' : 'black';
			echo '<td valign=middle style="color: '.$color.';">'.$lng2.'</td>';
			echo '<td valign=middle style="color: '.$color.';">'.$lng1.'</td>';
		}
		echo '</tr>';
	}
}

function findLngFiles( $dir ) {
	global $files_js1, $lang1;
	global $files_js2, $lang2;
	
	//$files1[] = $dir;
	
	$dh = opendir( $dir );
	while( $file = readdir( $dh ) ) {
		$tmp = $dir . DIRECTORY_SEPARATOR . $file;
		if( ($file == '.') || ($file == '..') ) {
		}elseif( is_dir( $tmp ) ) {
			findLngFiles( $tmp );
		} else {
			if( $file == $lang1.'.js' ) { $files_js1[] = $tmp; }
			if( $file == $lang2.'.js' ) { $files_js2[] = $tmp; }
		}
	}
	closedir( $dh );
}

function defineListJs( $file ) {
	$lines = file( $file );
	$defs = array();

	foreach( $lines as $line ) {
		$line = trim( $line );
		
		$regex = "/([^:]*):[^'\"]*('|\")(.*)[^'\"]*('|\")/";
		if( preg_match( $regex, $line, $matches )  ){
			$defs[trim($matches[1])] = $matches[3]; //trim(trim($matches[2]), " ,'\"");
		}
	}
	return $defs;
}


?>