<?php
Route::get('/students', [StudentController::class, 'index']);


class Student extends CI_Controller {
    public function index() {
        $this->load->view('student_list');
    }
}

?>