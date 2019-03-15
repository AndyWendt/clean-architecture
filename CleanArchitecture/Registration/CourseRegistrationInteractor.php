<?php

namespace CleanArchitecture\Registration;

use CleanArchitecture\Contracts\RequestHandler;

class CourseRegistrationInteractor implements RequestHandler
{
    /**
     * @var StudentRepository
     */
    private $studentRepository;

    /**
     * @var CourseRepository
     */
    private $courseRepository;

    public function __construct(StudentRepository $studentRepository, CourseRepository $courseRepository)
    {
        $this->studentRepository = $studentRepository;
        $this->courseRepository = $courseRepository;
    }

    public function handle(CourseRegistrationRequest $registrationRequest): CourseRegistrationResponse
    {
        $student = $this->studentRepository->find($registrationRequest->getStudentId());
        $course = $this->courseRepository->find($registrationRequest->getCourseId());
        $student->registerForCourse($course);
        $this->studentRepository->save($student);

        return new CourseRegistrationResponse($student->getFirstName(), $student->getLastName(), $course->getName());
    }
}