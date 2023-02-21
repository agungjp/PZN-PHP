<?php

class Model {
    public function getData() {
        // Logic untuk mengambil data dari database
        return array("data1", "data2", "data3");
    }
}

class View {
    public function render($data) {
        // Logic untuk menampilkan data dalam format HTML
        echo "<ul>";
        foreach ($data as $item) {
            echo "<li>" . $item . "</li>";
        }
        echo "</ul>";
    }
}

class Controller {
    public function __construct() {
        $this->model = new Model();
        $this->view = new View();
    }

    public function index() {
        $data = $this->model->getData();
        $this->view->render($data);
    }
}

$controller = new Controller();
$controller->index();

?>
