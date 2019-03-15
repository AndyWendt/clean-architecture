<?php

namespace CleanArchitecture\Registration;

class CourseRegistrationResponse
{
    /**
     * @var string
     */
    private $studentFirstName;

    /**
     * @var string
     */
    private $studentLastName;

    /**
     * @var string
     */
    private $courseName;

    public function __construct(string $studentFirstName, string $studentLastName, string $courseName)
    {
        $this->studentFirstName = $studentFirstName;
        $this->studentLastName = $studentLastName;
        $this->courseName = $courseName;
    }

    /**
     * @return string
     */
    public function getStudentFirstName(): string
    {
        return $this->studentFirstName;
    }

    /**
     * @return string
     */
    public function getStudentLastName(): string
    {
        return $this->studentLastName;
    }

    /**
     * @return string
     */
    public function getCourseName(): string
    {
        return $this->courseName;
    }
}