<?php
require_once BASE_URL . '/src/service/song/index.php';

class Song extends Controller {
    public function index($query=null){
        switch($_SERVER['REQUEST_METHOD']){
            case "GET":
                $this->view("search/index");
                break;
            case "POST":
                redirect_home();
                break;
        }
    }

    public function detail() {
        switch($_SERVER['REQUEST_METHOD']){
            case "GET":
                $song_service = new SongService();
                $id = $_GET['id'];
                $song = $song_service->detail($id);
                response_json($song);
            case "POST":
            break;
        }
    }

    public function new() {
        switch($_SERVER["REQUEST_METHOD"]) {
            case "GET":
                $this->view("song/insert_song");
                break;
            case "POST":
                $song_service = new SongService();
                $data = NULL;

                if (empty($_POST['judul']) || empty($_POST['penyanyi']) || empty($_POST['tanggal']) || empty($_POST['genre']) || empty($_FILES['cover']) || empty($_FILES['audio'])) {
                    $data = ["status_message" => DATA_NOT_COMPLETE];
                }
                else {
                    $status = $song_service->new($_POST['judul'], $_POST['penyanyi'], $_POST['tanggal'], $_POST['genre'], $_FILES);
                    $data = ["status_message" => $status];
                }
                $this->view("song/insert_song", $data);
                return;
                break;
        }
    }

    public function edit() {
        
    }

    public function delete() {
        $song_service = new SongService();
        $song_service->delete($_POST['id']);
        // belom tau redirect kemana
    }

    public function search() {
        $this->view("search/index");
        return;
    }
}