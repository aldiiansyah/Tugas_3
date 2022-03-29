<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan2 extends CI_Controller {

    public function index() {        
        $this->load->helper('url');
        $this->load->view('input_matakuliah.php');
    }

    public function cetak(){
        $kodeMataKuliah = $this->input->post('kode');
        $namaMataKuliah = $this->input->post('nama');
        $sksMataKuliah = $this->input->post('sks');

        if($sksMataKuliah == 4){
            $sksUnggulan = "Unggulan SKS";

        }else {
            $sksUnggulan = "SKS regular";
        }

        if($sksMataKuliah == 1){
            $nilaiBobot = "0-60";
            $StatusRemed = "Remedial";

        }
        
        elseif($sksMataKuliah == 2){
            $nilaiBobot = "60-74";
            $StatusRemed = "Tidak Remedial";
        }
        
        elseif($sksMataKuliah == 3){
            $nilaiBobot = "74-80";
            $StatusRemed = "Tidak Remedial";
        }

        elseif($sksMataKuliah == 4){
            $nilaiBobot = "80-100";
            $StatusRemed = "Tidak Remedial";
        }

        else {
            echo "Error Please Try Again";
        }

        //membuat object untuk parsing data ke view yg dituju
        $data = [
            'kode' => $kodeMataKuliah,
            'nama' => $namaMataKuliah,
            'sks' => $sksMataKuliah,
            'unggulan' => $sksUnggulan,
            'nilai' => $nilaiBobot,
            'status'=> $StatusRemed


        ];

        //kirim ke view
        $this->load->view('output_matakuliah.html', $data);


    }

}