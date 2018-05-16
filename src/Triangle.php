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
    public function __construct($newSide1 = 3, $newSide2 = 4, $newSide3 = 5)
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
        $p = $this->getPerimeter / 2;
        $a = $p - $this->side1;
        $b = $p - $this->side2;
        $c = $p - $this->side3;

        return sqrt($p * $a * $b * $c);
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
     * @return int
     */
    public function getPerimeter(): int
    {
        return $this->side1 + $this->side2 + $this->side3;
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
        return [$this->side1, $this->side2, $this->side3];
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
    public function setSides($newSide1 = 3, $newSide2 = 4, $newSide3 = 5)
    {
        if (!$this->isValid($newSide1, $newSide2, $newSide3)) {
            throw new \InvalidArgumentException(
                $newSide1.', '.
                $newSide2.', '.
                $newSide3.' do not make a valid triangle'
            );
        }

        $this->side1 = $newSide1;
        $this->side2 = $newSide2;
        $this->side3 = $newSide3;
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
        if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
            return false;
        }

        return true;
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
        if ($this->side1 !== $this->side2 || $this->side2 !== $this->side3) {
            return false;
        }

        return true;
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
        if ($this->side1 === $this->side2
            || $this->side1 === $this->side2
            || $this->side2 === $this->side3
        ) {
            return true;
        }

        return false;
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
        $a2 = $this->side1 * $this->side1;
        $b2 = $this->side2 * $this->side2;
        $c2 = $this->side3 * $this->side3;

        if ($a2 + $b2 !== $c2) {
            return false;
        }

        return true;
    }
}
