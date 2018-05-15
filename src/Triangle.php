<?php
/**
 * Triangle.php
 *
 * PHP Version 7
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
declare(strict_types=1);
namespace App;

/**
 * Triangle abstract data type
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class Triangle
{
    /**
     * A side of the triangle
     *
     * @var number
     */
    protected $side1;

    /**
     * A side of the triangle
     *
     * @var number
     */
    protected $side2;

    /**
     * A side of the triangle
     *
     * @var number
     */
    protected $side3;

    /**
     * __construct initializes the class. If no values are passed
     * the method sets all sides to a value of 1.
     *
     * @param number $newSide1 side of the triangle
     * @param number $newSide2 side of the triangle
     * @param number $newSide3 side of the triangle
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     */
    public function __construct($newSide1 = 1, $newSide2 = 1, $newSide3 = 1)
    {
        $this->setSides($newSide1, $newSide2, $newSide3);
    }

    /**
     * ToString returns a string representation of the class
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return string
     */
    public function __toString(): string
    {
         return '/App/Triangle';
    }

    /**
     * GetArea returns the area of the triangle using Heron's formula
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return number
     */
    public function getArea(): number
    {
        // TODO Implement this method
    }

    /**
     * GetPerimeter returns the perimeter of the triangle
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return number
     */
    public function getPerimeter(): number
    {
        // TODO Implement this method
    }

    /**
     * GetSides returns the sides of the triangle
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return array
     */
    public function getSides()
    {
        // TODO Implement this method
    }

    /**
     * SetSides sets the sides of the triangle
     *
     * @param number $newSide1 side of the triangle
     * @param number $newSide2 side of the triangle
     * @param number $newSide3 side of the triangle
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return void
     */
    public function setSides($newSide1 = 1, $newSide2 = 1, $newSide3 = 1)
    {
        // TODO Implement this method
    }

    /**
     * IsValid determines if triangle is valid
     *
     * @param number $a side of the triangle
     * @param number $b side of the triangle
     * @param number $c side of the triangle
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return bool
     */
    public function isValid($a, $b, $c): bool
    {
        // TODO Implement this method
    }

    /**
     * IsEqualateral determines if all sides are the same
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return bool
     */
    public function isEqualateral(): bool
    {
        // TODO Implement this method
    }

    /**
     * IsIsosceles determines if two sides are the same
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return bool
     */
    public function isIsosceles(): bool
    {
        // TODO Implement this method
    }

    /**
     * IsRightTriangle determines if it is a right triangle using the
     * Pythagorean therom.
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return bool
     */
    public function isRightTriangle(): bool
    {
        // TODO Implement this method
    }
}
