<?php
	require 'vendor/autoload.php';
	use Symfony\Component\Finder\Finder;

$finder = new Finder();

$files = $finder->files()->in('files');



foreach ($finder as $file) {
    // Dump the absolute path
    var_dump($file->getFileName());

   
}
?>