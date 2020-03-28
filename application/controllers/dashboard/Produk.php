<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        $data['title'] = 'Product';

        $this->load->view('layout/dashboard/header');
        $this->load->view('dashboard/v_produk', $data);
    }

    public function add_produk()
    {
        $config['upload_path'] = "./assets/images";
        $config['allowed_types'] = 'jpeg|jpg|png';

        $this->load->library('upload', $config);

        if (isset($_FILES['img_produk']['name'])) {
            if ($this->upload->do_upload('img_produk')) {
                $img = array('upload_data' => $this->upload->data());

                $data = array(
                    'id_produk' => uniqid(),
                    'nm_produk' => post('nm_produk'),
                    'slug' => str_replace(' ', '-', strtolower(post('nm_produk'))),
                    'img_produk' => $img['upload_data']['file_name'],
                    'id_kategori' => post('kategori'),
                    'stock' => str_replace(',', '', post('stok')),
                    'harga' => str_replace(',', '', post('harga')),
                    'diskon' => post('diskon'),
                    'deskripsi' => post('deskripsi')
                );

                $this->db->insert('tbl_produk', $data);
                echo json_encode(['status' => 'Data produk berhasil disimpan']);
                exit();
            } else {
                echo json_encode(['status' => $this->upload->display_errors()]);
                exit();
            }
        }
    }
}
