<?php declare(strict_types = 1);

namespace JanPiet\Tests\CodeCoverageShim;

class ClassLoaderTest extends \PHPUnit_Framework_TestCase
{
    public function test_original_classes_are_present()
    {
        $this->assertTrue(class_exists('PHP_CodeCoverage'), 'PHP_CodeCoverage missing');
        $this->assertTrue(class_exists('PHP_CodeCoverage_Report_Text'), 'PHP_CodeCoverage_Report_Text missing');
        $this->assertTrue(class_exists('PHP_CodeCoverage_Report_PHP'), 'PHP_CodeCoverage_Report_PHP missing');
        $this->assertTrue(class_exists('PHP_CodeCoverage_Report_Clover'), 'PHP_CodeCoverage_Report_Clover missing');
        $this->assertTrue(class_exists('PHP_CodeCoverage_Report_HTML'), 'PHP_CodeCoverage_Report_HTML missing');
        $this->assertTrue(interface_exists('PHP_CodeCoverage_Exception'), 'PHP_CodeCoverage_Exception missing');
    }

    public function test_new_classes_are_present()
    {
        $this->assertTrue(class_exists('SebastianBergmann\CodeCoverage\CodeCoverage'), 'SebastianBergmann\CodeCoverage\CodeCoverage missing');
        $this->assertTrue(class_exists('SebastianBergmann\CodeCoverage\Report\Text'), 'SebastianBergmann\CodeCoverage\Report\Text missing');
        $this->assertTrue(class_exists('SebastianBergmann\CodeCoverage\Report\PHP'), 'SebastianBergmann\CodeCoverage\Report\PHP missing');
        $this->assertTrue(class_exists('SebastianBergmann\CodeCoverage\Report\Clover'), 'SebastianBergmann\CodeCoverage\Report\Clover missing');
        $this->assertTrue(class_exists('SebastianBergmann\CodeCoverage\Report\Html\Facade'), 'SebastianBergmann\CodeCoverage\Report\Html\Facade missing');
        $this->assertTrue(interface_exists('SebastianBergmann\CodeCoverage\Exception'), 'SebastianBergmann\CodeCoverage\Exception missing');
    }

}