<?php
session_start();
$c = $_GET['c'] ?? 'student';
$a = $_GET['a'] ?? 'index';
$strcontroller = ucfirst($c) . 'Controller';
// import CONTROLLER
require "controller/$strcontroller.php";

// import config & database
require 'config.php';
require 'connectDB.php';

// import MODEL
require 'model/StudentRepository.php';
require 'model/Student.php';

require 'model/SubjectRepository.php';
require 'model/Subject.php';

require 'model/RegisterRepository.php';
require 'model/Register.php';
// tạo đối tượng controller
$controller = new $strcontroller();

// Gọi hàm tương ứng với action
$controller->$a();
