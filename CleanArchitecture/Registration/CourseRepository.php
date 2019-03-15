<?php

namespace CleanArchitecture\Registration;

interface CourseRepository
{
    public function find(int $courseId): Course;
}