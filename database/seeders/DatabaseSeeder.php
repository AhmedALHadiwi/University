<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Department;
use App\Models\Enrollment;
use App\Models\Exam;
use App\Models\Faculty;
use App\Models\Instructor;
use App\Models\Payment;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Instructor::factory(70)->create();
        $faculties = [
            "Faculty of Computer Science",
            "Faculty of Engineering",
            "Faculty of Medicine",
            "Faculty of Business Administration",
            "Faculty of Arts",
            "Faculty of Science",
            "Faculty of Law",
            "Faculty of Education",
            "Faculty of Pharmacy",
            "Faculty of Dentistry",
            "Faculty of Agriculture",
            "Faculty of Architecture",
            "Faculty of Fine Arts",
            "Faculty of Economics",
            "Faculty of Veterinary Medicine"
        ];

        // Example usage: printing faculty names
        foreach ($faculties as $faculty) {
            Faculty::factory()->create([
                'faculty_name'=>$faculty,
                'degree_level' => fake()->randomElement(['Bachelor', 'Master', 'PhD']),
            ]);
        }

        $departments = [
            "Computer Science",
            "Software Engineering",
            "Information Technology",
            "Electrical Engineering",
            "Mechanical Engineering",
            "Civil Engineering",
            "Biotechnology",
            "Physics",
            "Chemistry",
            "Mathematics",
            "Business Administration",
            "Economics",
            "Psychology",
            "Architecture",
            "Law"
        ];

        $rand_faculty_id = Faculty::all()->random()->id;

        foreach ($departments as $department) {
            Department::factory()->created([
                'department_name' => $department,
                'faculty_id' => $rand_faculty_id,
            ]);
        }

        $courses = [
            "Introduction to Programming" => "CS101",
            "Data Structures" => "CS102",
            "Discrete Mathematics" => "CS103",
            "Algorithms" => "CS104",
            "Database Management Systems" => "CS105",
            "Computer Networks" => "CS106",
            "Operating Systems" => "CS107",
            "Software Engineering" => "CS108",
            "Web Development" => "CS109",
            "Mobile App Development" => "CS110",
            "Artificial Intelligence" => "CS111",
            "Machine Learning" => "CS112",
            "Data Science" => "CS113",
            "Cloud Computing" => "CS114",
            "Cybersecurity" => "CS115",
            "Computer Graphics" => "CS116",
            "Digital Logic Design" => "CS117",
            "Computer Architecture" => "CS118",
            "Game Development" => "CS119",
            "E-commerce" => "CS120",
            "Human-Computer Interaction" => "CS121",
            "Software Testing" => "CS122",
            "Business Intelligence" => "CS123",
            "Big Data Analytics" => "CS124",
            "Internet of Things (IoT)" => "CS125",
            "Blockchain Technology" => "CS126",
            "Cloud Security" => "CS127",
            "Natural Language Processing" => "CS128",
            "Robotics" => "CS129",
            "Virtual Reality" => "CS130",
            "Data Visualization" => "CS131",
            "Computer Vision" => "CS132",
            "Deep Learning" => "CS133",
            "Neural Networks" => "CS134",
            "Parallel Computing" => "CS135",
            "Advanced Databases" => "CS136",
            "Quantum Computing" => "CS137",
            "Ethical Hacking" => "CS138",
            "Distributed Systems" => "CS139",
            "Cloud Application Development" => "CS140",
            "Introduction to Data Analytics" => "CS141",
            "Cloud Infrastructure" => "CS142",
            "Digital Transformation" => "CS143",
            "Smart Cities" => "CS144",
            "Data Security" => "CS145",
            "AI in Healthcare" => "CS146",
            "Game Design" => "CS147",
            "Web Application Security" => "CS148",
            "Software Architecture" => "CS149",
            "Augmented Reality" => "CS150",
            "Biometric Systems" => "CS151",
            "Voice Recognition Systems" => "CS152",
            "Text Mining" => "CS153",
            "Intelligent Systems" => "CS154",
            "Automated Systems" => "CS155",
            "Advanced Machine Learning" => "CS156",
            "Edge Computing" => "CS157",
            "Data Engineering" => "CS158",
            "Cloud Data Management" => "CS159",
            "Mobile Game Development" => "CS160",
            "Machine Vision" => "CS161",
            "Advanced Networking" => "CS162",
            "Virtualization Technology" => "CS163",
            "Autonomous Vehicles" => "CS164",
            "Social Media Analytics" => "CS165",
            "Data Ethics" => "CS166",
            "Blockchain for Developers" => "CS167",
            "Big Data Technologies" => "CS168",
            "Business Analytics" => "CS169",
            "Advanced Programming" => "CS170",
            "Digital Marketing" => "CS171",
            "Robotic Process Automation" => "CS172",
            "Quantum Algorithms" => "CS173",
            "Advanced Databases Management" => "CS174",
            "Financial Technology (FinTech)" => "CS175",
            "Healthcare IT" => "CS176",
            "Geospatial Data Analysis" => "CS177",
            "Python for Data Science" => "CS178",
            "Artificial Neural Networks" => "CS179",
            "Cognitive Computing" => "CS180",
            "Natural Language Generation" => "CS181",
            "IoT Security" => "CS182",
            "Deep Reinforcement Learning" => "CS183",
            "Cloud Application Security" => "CS184",
            "Tech Entrepreneurship" => "CS185",
            "Blockchain Applications" => "CS186",
            "Human-Robot Interaction" => "CS187",
            "Big Data Solutions" => "CS188",
            "Computational Biology" => "CS189",
            "Network Security" => "CS190",
            "System Design" => "CS191",
            "Advanced Software Engineering" => "CS192",
            "Data Modeling" => "CS193",
            "Artificial Intelligence in Finance" => "CS194",
            "Cyber-Physical Systems" => "CS195",
            "Data-Driven Decision Making" => "CS196",
            "Cyber Law" => "CS197",
            "AI Ethics" => "CS198",
            "Smart Manufacturing" => "CS199",
            "Automated Data Science" => "CS200",
            "Digital Twins" => "CS201",
            "Intelligent Robotics" => "CS202",
            "Advanced Cloud Computing" => "CS203",
            "Game AI" => "CS204",
            "Advanced Computer Vision" => "CS205",
            "Ethical Data Mining" => "CS206",
            "Data Governance" => "CS207",
            "Autonomous Systems" => "CS208",
            "Advanced Data Science" => "CS209",
            "Human-Computer Interface" => "CS210",
            "Data Integration" => "CS211",
            "Smart Algorithms" => "CS212",
            "Quantum Information Systems" => "CS213",
            "Data Science for Business" => "CS214",
            "Mobile Security" => "CS215",
            "Digital Forensics" => "CS216",
            "AI in Robotics" => "CS217",
            "Computational Finance" => "CS218",
            "Digital Signal Processing" => "CS219",
            "Cloud-Native Development" => "CS220",
            "Smart Devices" => "CS221",
            "AI in Business" => "CS222",
            "Data Streams" => "CS223",
            "Data Analytics in Marketing" => "CS224",
            "AI for Social Good" => "CS225",
            "IT Project Management" => "CS226",
            "Deep Neural Networks" => "CS227",
            "AI in Cybersecurity" => "CS228",
            "High-Performance Computing" => "CS229",
            "Human-Centered Design" => "CS230",
            "Big Data Infrastructure" => "CS231",
            "Data Science for Healthcare" => "CS232",
            "Blockchain Development" => "CS233",
            "Machine Learning Algorithms" => "CS234",
            "Smart Systems" => "CS235",
            "AI in Education" => "CS236",
            "Data Mining Techniques" => "CS237",
            "Cloud Storage Solutions" => "CS238",
            "Deep Learning for Computer Vision" => "CS239",
            "Business Intelligence Systems" => "CS240",
            "Smart Data Solutions" => "CS241",
            "AI in Marketing" => "CS242",
            "Advanced Internet of Things" => "CS243",
            "Machine Learning for Data Analytics" => "CS244",
            "Security in Cloud Computing" => "CS245",
            "Computational Neuroscience" => "CS246",
            "Voice AI" => "CS247",
            "Distributed Cloud Systems" => "CS248",
            "AI and Ethics in Technology" => "CS249",
            "Next-Gen Databases" => "CS250"
        ];


        $rand_faculty_id = Faculty::all()->random()->id;

        foreach($courses as $course => $code){
            Course::factory()->create([
                'course_name' => $course,
                'course_code' =>$code,
                'credit_hours' =>fake()->randomElement([2, 3]),
                'faculty_id' =>$rand_faculty_id
            ]);
        }

        Student::factory(4000)->create();

        Enrollment::factory(1500)->create();

        Classroom::factory(240)->create();

        Schedule::factory(500)->create();

        Exam::factory(600)->create();

        Payment::factory(2000)->create();
    }


}
