<?php
/**
 * TriangleInterface.php
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
 * TriangleInterface abstract data type
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
interface TriangleInterface
{
    /**
     * Sets or modifies the sides of this triangle. Ensures that the
     * new sides form a triangle.
     *
     * @param number $newSide1 side of the triangle
     * @param number $newSide2 side of the triangle
     * @param number $newSide3 side of the triangle
     *
     * @return null
     */
    public function setSides($newSide1, $newSide2, $newSide3);

    /**
     * Returns the sides of this triangle.
     *
     * @return array
     */
    public function getSides();

    /**
     * IsValid determines if triangle is valid
     *
     * @param number $a side of the triangle
     * @param number $b side of the triangle
     * @param number $c side of the triangle
     *
     * @return bool
     */
    public function isValid($a, $b, $c);

    /**
     * IsEqualateral determines if all sides are the same
     *
     * @return bool
     */
    public function isEqualateral();

    /**
     * IsIsosceles determines if two sides are the same
     *
     * @return bool
     */
    public function isIsosceles();

    /**
     * IsRightTriangle determines if it is a right triangle using the
     * Pythagorean therom.
     *
     * @return bool
     */
    public function isRightTriangle();
}
