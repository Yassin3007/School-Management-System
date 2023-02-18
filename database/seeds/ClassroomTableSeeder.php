<?php
namespace Database\Seeders;
use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('classrooms')->delete();
        $classrooms = [
            ['en'=> 'First grade', 'ar'=> 'الصف الاول'],
            ['en'=> 'Second grade', 'ar'=> 'الصف الثاني'],
            ['en'=> 'Third grade', 'ar'=> 'الصف الثالث'],
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create([
            'Name_Class' => $classroom,
            'Grade_id' => 1
            ]);
            Classroom::create([
                'Name_Class' => $classroom,
                'Grade_id' => 2
            ]);
            Classroom::create([
                'Name_Class' => $classroom,
                'Grade_id' => 3
            ]);
        }
    }
}