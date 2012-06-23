<?php


global $defs;
$defs = array();


find_defs( 'site/language/nb-NO/' );
find_defs( 'administrator/language/nb-NO/' );
#find_defs( 'installation/language/nb-NO/' );

foreach( $defs as $def => $text) {
	if( count($text) < 2 ) continue;

	$diff = false;
	$cur = $text[0][0];
	for( $i=1; $i<count($text); $i++ ) {
		if( $cur != $text[$i][0] ) {
			$diff = true;
		}
	}

	if( $diff ) {
		foreach( $text as $line ) {
			echo "$def=$line[0] ($line[1])\n";
		}
	echo "\n";
	}
}


function find_defs( $dir ) {
	global $defs;
	
	$dh = opendir( $dir );
	while( $file = readdir( $dh ) ) {
		if( preg_match( '/\.ini$/', $file ) ) {
			$lines = file( $dir.$file );

			foreach( $lines as $line ) {
				$line = trim($line);
				if( (preg_match( '/^#/', $line ) == false) & (preg_match('/=..*/', $line) == true) ) {
					$parts = split('=', $line, 2);
						
					$defs[$parts[0]][] = array( $parts[1], $dir.$file );
				}
			}

		}
	}
	closedir( $dh );
}

?>
