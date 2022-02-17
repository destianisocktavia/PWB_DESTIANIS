<?php
class Home extends Controller
{
    public function index()
    {
        $data['nama'] = $this->model('User_model')->getUser();
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}
?>