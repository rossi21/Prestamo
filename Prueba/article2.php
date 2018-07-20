<?php
use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Report\Html\HTMLTest;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

require 'vendor/autoload.php';
include 'article2-Test.php';

// $coverage = new PHP_CodeCoverage;

// $coverage->start('coverage1');
// ifthenelse( true, false );
// $coverage->stop();

// $coverage->start('coverage2');
// ifthenelse( false, true );
// $coverage->stop();

// $writer = new PHP_CodeCoverage_Report_HTML;
// $writer->process($coverage, '/tmp/code-coverage-article');

$co= new CodeCoverage();
$co->start('coverage1');
ifthenelse(true, false);
$co->stop();

$co->start('coverage2');
ifthenelse( false, true );
$co->stop();

$co= new CodeCoverage();
$co->start('coverage1');
cuaquier(true, false);
$co->stop();

$co->start('coverage2');
cuaquier( false, true );
$co->stop();


//$writer = new \SebastianBergmann\CodeCoverage\Report\Html\Facade;

//var_dump("OK"); exit;

//$writer->process($coverage, $target);

//$writer->process($co, '/tmp/code-coverage-report');

$ruta=dirname(__FILE__);

$writer = new \SebastianBergmann\CodeCoverage\Report\Clover;
$writer->process($co, $ruta.'/clover.xml');

$writer = new \SebastianBergmann\CodeCoverage\Report\Html\Facade;
$writer->process($co, $ruta.'/code-coverage-report');

?>