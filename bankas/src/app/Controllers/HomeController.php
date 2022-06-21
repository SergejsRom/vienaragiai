<?php
namespace Bankas\Controllers;
use Bankas\App;
use Bankas\Messages as M;


class HomeController {


    public function getIt($param) {

        echo 'AAA: '.$param;
    }


    public function index() {
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        }
        return App::view('home', [
            'title' => 'Alabama',
            'list' => $list
        ]);
    }

    public function indexJson() {
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        }
        return App::json($list);
    }

    public function formJson() {
        $rawData = file_get_contents("php://input");
        $data = json_decode($rawData, 1);

        $w = $data['alabama'];

        if (strlen($w) > 5) {
            $msg = 'Blogai';
            $err = 1;
        } else {
            $msg = 'Gerai';
            $err = 0;
        }


        return App::json(['err' => $err, 'msg'=> $msg, 'youSay' => $data['alabama']]);
    }


    public function form() {
        return App::view('form', ['messages' => M::get()]);
    }

    public function doForm() {
        if(($_POST['csrf'] ?? '') != App::csrf()) {
            M::add('Blogas kodas', 'alert');
            return App::redirect('forma');
        }
        M::add('Puiku', 'alert');
        M::add($_POST['alabama'], 'success');
        return App::redirect('forma');
    }
}