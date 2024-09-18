<?php


//Inheritance
class Person { //class person sebagai induk class
    protected $name;

public function __construct($name)
{
    $this->name = $name;
}

public function getName()  
{
       return "Name: $this->name"; 
}
}

//class student yang mewarisi class Person
class Student extends Person {
    private $studentID;

public function __construct($nama, $studentID)
{
    parent:: __construct($nama);
    $this->studentID = $studentID;
}
public function getStudentID() //metode getter untuk mengambil atau mendapatkan studentID
{
    return "ID Student: $this->studentID";
}

public function setStudentID($studentID) //metode setter untuk attribute studentID
{
    $this->studentID = $studentID;
}

// Override metode getName() untuk class Student
public function getName() //metode getter untuk attribute name
{
    return "Student name: $this->name";
}

public function setName($name) //metode setter untuk attribute name
{
    $this->name = $name;
}
}

//Polymorphism
class Teacher extends Person { //class teacher mewarisi class Person
    private $teacherID;

public function __construct($nama, $teacherID)
{
    parent:: __construct($nama);
    $this->teacherID = $teacherID;    
}
// Override metode getName() untuk Teacher
public function getName() //metode getter attribute name
{
    return "Teacher Name: " . $this->name;
}
public function setName($name) //metode setter attribute name
{
    $this->name = $name;
}

public function getTeacherID() //metode getter untuk attribute teacherID
{
    return "Teacher ID: $this->teacherID";
}
public function setTeacherID($teacherID) //metode setter untuk attribute teacherID
{
    $this->teacherID = $teacherID;
}
}

//abstraction
abstract class Course { //class abtract course
    protected $nama;

    public function __construct($nama) //construct untuk menginisialisasi property
    {
        $this->nama = $nama;
    }

    public function tampilNama()
    {
        return "Nama : $this->nama";
    }

    abstract public function getCourseDetails(); //metode abstract
}

//class OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course
{
    public function getCourseDetails()
    {
        echo "Nama : $this->nama" ."<br>";
        echo "Online Course." ."<br>";
    }
}

//class OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course
{
    //implementasi metode abstract dari parent atau class Course
    public function getCourseDetails()
    {
        echo "Nama : $this->nama" ."<br>";
        echo "Offline Course." ."<br>";
    }
}




//objek class student
$student = new Student ("Anjani", "230829817");
echo $student->getName() ."<br>"; //menampilkan metode
echo $student->getStudentID() ."<br>"; 

//objek class Teacher
$teacher1 = new Teacher ("Amara", "897654");
echo $teacher1->getName() ."<br>"; //menampilkan metode
echo $teacher1->getTeacherID() ."<br>";

//objek class OnlineCourse
$online_course = new OnlineCourse("Adinda");
echo $online_course->getCourseDetails() ."<br>";

//objek class OfflineCourse
$offline_course = new OfflineCourse("Azzura");
echo $offline_course->getCourseDetails() ."<br>";
?>