<?php
namespace Database\Seeders;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();

        $Sections = [
            ['en' => 'a', 'ar' => 'ا'],
            ['en' => 'b', 'ar' => 'ب'],
            ['en' => 'c', 'ar' => 'ت'],
        ];

        foreach ($Sections as $section) {
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 1,
                'Class_id' => 1
            ]);
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 1,
                'Class_id' => 2
            ]);
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 1,
                'Class_id' => 3
            ]);
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 2,
                'Class_id' => 1
            ]);
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 2,
                'Class_id' => 2
            ]);
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 2,
                'Class_id' => 3
            ]);
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 3,
                'Class_id' => 1
            ]);
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 3,
                'Class_id' => 2
            ]);
            Section::create([
                'Name_Section' => $section,
                'Status' => 1,
                'Grade_id' => 3,
                'Class_id' => 3
            ]);
        }
    }
}
