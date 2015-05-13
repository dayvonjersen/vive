<?php
function drapeau( $couleur )
{
	echo "\033[{$couleur}m";
	for($j = 0; $j < 26; $j++)
	{
		echo " ";
		usleep(12820);
	}
	echo "\033[0m";
}

if(`which aplay`)
{
	$bleu = 44;
	$blanc = 47;
	$rouge = 41;
	exec('aplay vivelafrance.wav > /dev/null 2>&1 &');
	for($i = 0; $i < 14; $i++)
	{
		echo " ";
		drapeau($bleu);
		drapeau($blanc);
		drapeau($rouge);
		echo " \n";
	}
	echo "\n;-;7\n";
}
