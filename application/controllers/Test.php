<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Test extends CI_Controller {
    public function index() {
        $data['title'] = 'Test Load Bootstrap Etc';
        $data['dummy'] = [
            [
                "first" => "Mark",
                "last" => "Otto",
                "handle" => "@mdo"
            ],
            [
                "first" => "Jacob",
                "last" => "Thornton",
                "handle" => "@fat"
            ],
            [
                "first" => "Larry the Bird",
                "last" => "",
                "handle" => "@twitter"
            ]
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('test', $data);
        $this->load->view('templates/footer');
    }
}