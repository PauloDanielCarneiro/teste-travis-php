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

use PHPUnit\Framework\TestCase;
use test\lib\Index;

/**
 * This class controls all test cases who will be executed.
 * 
 * @category Description
 * @package  Category
 * @author   Name <email@email.com>
 * @license  MIT www.www.www
 * @link     http://url.com
 */
final class TestIndex extends TestCase
{
    /**
     * Verify if the sum is working as expected
     *
     * @return void
     */
    public function testSum()
    {
        $this.assertEquals(
            5,
            Index::sum(2, 3)
        );
    }
}