<?php

namespace App\Http\Controllers;

use CleanArchitecture\Registration\CourseRegistrationInteractor;
use CleanArchitecture\Registration\CourseRegistrationRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addCourse($studentId, $courseId, CourseRegistrationInteractor $courseRegistrationInteractor)
    {
        $courseRegistrationRequest = new CourseRegistrationRequest($studentId, $courseId);
        $courseRegistrationResponse = $courseRegistrationInteractor->handle($courseRegistrationRequest);

        return response()->json([
            'course_name' => $courseRegistrationResponse->getCourseName(),
            [
                'student' => [
                    'first_name' => $courseRegistrationResponse->getStudentFirstName(),
                    'last_name' => $courseRegistrationResponse->getStudentLastName()
                ],
            ],
        ]);
    }
}
