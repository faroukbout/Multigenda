<?php
class Controller {
    protected $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    protected function view($view, $data = []) {
        extract($data);
        require_once APP_PATH . "/views/{$view}.php";
    }

    protected function redirect($url) {
        header("Location: " . APP_URL . "/{$url}");
        exit();
    }
}