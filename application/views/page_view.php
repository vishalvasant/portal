<?php
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view($path,$data);
    $this->load->view('layout/footer');

?>