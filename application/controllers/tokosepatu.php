<?php
class Tokosepatu extends CI_Controller
{
	public function index(){
		$this->load->view('view-form-sepatu');
	}

	public function cetak()
    {
            $this->form_validation->set_rules('nama', 'Nama pembeli', 
            'required|min_length[3]', [
            'required' => 'Nama Harus Diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
    {
		$this->form_validation->set_rules('notelp', 'No telepon', 
            'required|min_length[3]', [
			'required' => 'No Telepon Harus diisi',
			'min_length' => 'No Telepon terlalu pendek'
		]);

		$this->form_validation->set_rules('merek', 'Merek sepatu','required', [
			'required' => 'Merek sepatu Harus dipilih',
		]);

        $this->form_validation->set_rules('ukuran', 'Ukuran seoatu','required', [ 
            'required' => 'Ukuran harus di isi', 
        ]); 

		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-sepatu');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'notelp' => $this->input->post('notelp'),
				'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga'),
			];

			if ($this->input->post('merek') == 'Neobalance'){
				$data['harga'] = 475000;
			}

			if ($this->input->post('merek') == 'Adidas'){
				$data['harga'] = 300000;
			}

			if ($this->input->post('merek') == 'Kickers'){
				$data['harga'] = 250000;
			}

			if ($this->input->post('merek') == 'Eiger'){
				$data['harga'] = 275000;
			}

			if ($this->input->post('merek') == 'Gucci'){
				$data['harga'] = 900000;
			}

			$this->load->view('view-data-sepatu', $data);
		}
    }
}
} 