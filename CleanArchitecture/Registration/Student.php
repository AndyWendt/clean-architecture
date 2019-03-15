<?php

namespace CleanArchitecture\Registration;

use CleanArchitecture\Contracts\Entity;

class Student implements Entity
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var Course[]
     */
    private $courses = [];

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function registerForCourse(Course $course): bool
    {
        $found = array_map(function (Course $compareCourse) use ($course) {
            return $compareCourse->getId() === $course->getId();
        }, $this->courses);

        if ($found) {
            return false;
        }

        array_push($this->courses, $course);
        return true;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
}