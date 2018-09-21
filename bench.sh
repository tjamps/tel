#!/usr/bin/env bash

scripts='substr.php chunk_split.php preg_replace.php concat.php'

for script in $scripts;
do
	echo $script
	for i in {1..10};
	do
		/usr/bin/time -f%e php $script
	done
	echo
done

