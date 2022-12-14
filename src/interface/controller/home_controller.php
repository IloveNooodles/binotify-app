<?php
require_once BASE_URL . '/src/service/search/index.php';
require_once BASE_URL . '/src/interface/controller/utils/index.php';

class Home extends Controller {
    public function index() {
      switch($_SERVER['REQUEST_METHOD']){
        case "GET":
          $search_service = new SearchService();
          if (isset($_GET['page']) and $_GET['page'] > 0) {
              $page = $_GET['page'];
          } else {
              $page = 1;
          }

          $data = $search_service->search_all_song($page);
          
          $this->view('home/index', $data);
          return;
        case "POST":
          return;
        default:
          response_not_allowed_method();
          return;
      }
    }
}