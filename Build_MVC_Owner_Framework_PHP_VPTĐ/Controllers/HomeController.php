<?php
    class HomeController extends BaseController
    {
        public function __construct()
        {
            $this->loadModel('HomeModel');
            $this->homeModel = new HomeModel;
        }
            
        public function index()
        {
            $homes = $this->homeModel->getAll();
            return $this->view('frontend.homes.index', [
                'pageTitle' => 'Trang danh sách Users',
                'homes' => $homes,
            ]);
        }
    }
?>