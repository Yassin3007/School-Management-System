<?php

namespace App\Repository ;

Interface TeacherRepositoryInterface {
    public function getAllTeachers();

    public function GetSpecialization();

    public function GetGender();

    public function StoreTeachers($request);

    public function getTeacherById($id);

    public function updateTeacher($request);

    public function deleteTeachers($request);
}
