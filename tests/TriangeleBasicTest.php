<?php
/**
 * Unit-test for TriangleBasicTest.php
 *
 * PHP Version 7
 *
 * @category UnitTests
 * @package  Tests
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
declare(strict_types=1);
namespace App\Tests;

use App\Triangle;
use PHPUnit\Framework\TestCase;

/**
 * TriangleBasicTest tests the TriangleBasic class
 *
 * @category UnitTests
 * @package  App\Tests
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class TriangleBasicTest extends TestCase
{
    /**
     * Set up data needed for every unit-test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function setUp(): void
    {
        $this->harness = new Triangle(3, 4, 5);
    }

    /**
     * Tests if unit-test can be run
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testCanary(): void
    {
        // arrange & act & assert
        $this->assertTrue($this->harness instanceof Triangle);
    }


    /**
     * Tests
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsValidFalse(): void
    {
        // arrange & act
        $actual = $this->harness->isValid(1, 0, -1);
        // assert
        $this->assertFalse($actual);
    }

    /**
     * Tests
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsValidTrue(): void
    {
        // arrange & act
        $actual = $this->harness->isValid(3, 4, 5);
        // assert
        $this->assertTrue($actual);
    }

    /**
     * Tests
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testGetSides(): void
    {
        // act
        $actual = $this->harness->getSides();
        // assert
        $this->assertTrue($actual[0] === 3);
        $this->assertTrue($actual[1] === 4);
        $this->assertTrue($actual[2] === 5);
    }

    /**
     * Tests
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testSetSidesSuccess(): void
    {
        // arrange
        $this->harness->setSides(3, 4, 5);
        // act
        $actual = $this->harness->getSides();
        // assert
        $this->assertTrue($actual[0] === 3);
        $this->assertTrue($actual[1] === 4);
        $this->assertTrue($actual[2] === 5);
    }

    /**
     * Tests
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     *
     * @expectedException InvalidArgumentException
     */
    public function testSetSidesException(): void
    {
        // arrange & act & assert
        $this->harness->setSides(0, -1, -3);
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsEqualateralTrue(): void
    {
        // arrange
        $this->harness->setSides(3, 3, 3);
        // act
        $actual = $this->harness->isEqualateral();
        // assert
        $this->assertTrue($actual);
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsEqualateralFalse(): void
    {
        // arrange
        $this->harness->setSides(3, 1, 3);
        // act
        $actual = $this->harness->isEqualateral();
        // assert
        $this->assertFalse($actual);
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsIsoscelesTrue(): void
    {
        // arrange
        $this->harness->setSides(2, 2, 3);
        // act
        $actual = $this->harness->isIsosceles();
        // assert
        $this->assertTrue($actual);
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsIsoscelesFalse(): void
    {
        // arrange
        $this->harness->setSides(5, 12, 13);
        // act
        $actual = $this->harness->isIsosceles();
        // assert
        $this->assertFalse($actual);
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsRightTriangleTrue(): void
    {
        // arrange
        $this->harness->setSides(5, 12, 13);
        // act
        $actual = $this->harness->isRightTriangle();
        // assert
        $this->assertTrue($actual);
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsRightTriangleFalse(): void
    {
        // arrange
        $this->harness->setSides(5, 12, 14);
        // act
        $actual = $this->harness->isRightTriangle();
        // assert
        $this->assertFalse($actual);
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testPerimeterSuccess(): void
    {
        // arrange
        $expected = 30;
        $this->harness->setSides(5, 12, 13);
        // act
        $actual = $this->harness->getPerimeter();
        // assert
        $this->assertEquals($expected, $actual);
    }
}
