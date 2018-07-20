<?php
use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Report\Html\HTMLTest;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

require 'vendor/autoload.php';
include 'src/article2-Test.php';

$coverage = new CodeCoverage;
$ruta=dirname(__FILE__);



//$coverage->filter()->addDirectoryToWhitelist($ruta);
$coverage->filter()->addDirectoryToWhitelist('src');

 $coverage->start('coverage1');
 ifthenelse(true, false);
 $coverage->stop();
 
 $coverage->start('coverage2');
 ifthenelse( false, true );
 $coverage->stop();
 
 $co= new CodeCoverage();
 $co->start('coverage1');
 cuaquier(true, false);
 $co->stop();
 
 $co->start('coverage2');
 cuaquier( true, true );
 $co->stop();
 

//  $writer = new \SebastianBergmann\CodeCoverage\Report\Clover;
//  $writer->process($coverage, $ruta.'/clover.xml');
 
 $writer = new \SebastianBergmann\CodeCoverage\Report\Html\Facade;
 $writer->process($coverage, $ruta.'/code-coverage-report');