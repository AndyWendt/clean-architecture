<?php

namespace App\Repositories;


use App\Exceptions\NotImplementedException;
use CleanArchitecture\Registration\Course;

class CourseRepository implements \CleanArchitecture\Registration\CourseRepository
{
    public function find(int $courseId): Course
    {
        throw new NotImplementedException();
    }
}