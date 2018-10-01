<?php
/**
 * This file will test the Index file in src folder
 *
 * PHP version 5.4
 *
 * @category Description
 * @package  Category
 * @author   Name <email@email.com>
 * @license  MIT www.www.www
 * @link     http://url.com
 */

namespace App\Tests;
use \App\Calculator;
use PHPUnit\Framework\TestCase;


/**
 * This class controls all test cases who will be executed.
 *
 * @category Description
 * @package  Category
 * @author   Name <email@email.com>
 * @license  MIT www.www.www
 * @link     http://url.com
 */
class SampleTest extends \PHPUnit_Framework_TestCase
{
    /** 
     * Test
     * 
     * @test 
     * 
     * @return void
     */
    public function testFunction()
    {
        $target = new \App\Calculator();
        $result = $target->sum(1, 2);
        $this->assertEquals(
            3,
            $result
        );
        // Test
    }

}
