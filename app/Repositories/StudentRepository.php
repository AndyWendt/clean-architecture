<?php

namespace App\Repositories;

use App\Exceptions\NotImplementedException;
use CleanArchitecture\Registration\Student;

class StudentRepository implements \CleanArchitecture\Registration\StudentRepository
{
    public function save(Student $student)
    {
        throw new NotImplementedException();
    }

    public function find(int $id): Student
    {
        throw new NotImplementedException();
    }
}