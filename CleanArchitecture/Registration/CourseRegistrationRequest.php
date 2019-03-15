<?php

namespace CleanArchitecture\Registration;

class CourseRegistrationRequest
{
    /**
     * @var int
     */
    private $studentId;

    /**
     * @var int
     */
    private $courseId;

    public function __construct(int $studentId, int $courseId)
    {
        $this->studentId = $studentId;
        $this->courseId = $courseId;
    }

    /**
     * @return int
     */
    public function getStudentId(): int
    {
        return $this->studentId;
    }

    /**
     * @return int
     */
    public function getCourseId(): int
    {
        return $this->courseId;
    }
}