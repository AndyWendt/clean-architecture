<?php

namespace CleanArchitecture\Registration;

interface StudentRepository
{
    public function save(Student $student);

    public function find(int $id): Student;
}