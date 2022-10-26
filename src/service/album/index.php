<?php
require_once BASE_URL . '/src/interface/model/album.php';
require_once BASE_URL . '/src/interface/model/song.php';
require_once BASE_URL . '/src/infrastructure/upload/upload.php';
require_once "utils/constant.php";

class AlbumService {
    public function detail($album_id) {
        $album_model = new AlbumModel();
        $album = $album_model->find_detail_album($album_id);
        return $album;
    }

    public function new($judul, $penyanyi, $tanggal_terbit, $genre, $file) {
        $total_duration = 0;
        $album_model = new AlbumModel();

        try {
            $result = save_image($file, TARGET_IMG);
            if ($result == null) {
                return INTERNAL_ERROR;
            }
            $album_model->insert_album($judul, $penyanyi, $tanggal_terbit, $total_duration, $genre, $result);
        } catch (Throwable $e) {
            return INTERNAL_ERROR;
        }
        return SUCCESS;
    }

    public function edit($album_id, $judul, $penyanyi, $tanggal_terbit, $genre, $file_cover) {
        $album_model = new AlbumModel();
        try {
            $cur_album = $album_model->find_detail_album($album_id);
            if ($cur_album == null) {
                return ALBUM_NOT_FOUND;
            }
            $cover = $cur_album['image_path'];
            if ($file_cover != null) {
                $result = save_image($file_cover, TARGET_IMG);
                if ($result == null) {
                    return INTERNAL_ERROR;
                }
                $cover = $result;
            }

            $album_model->update_album($judul, $penyanyi, $tanggal_terbit, $cur_album['total_duration'], $genre, $cover, $album_id);
        } catch (Throwable $e) {
            return INTERNAL_ERROR;
        }
        return SUCCESS;
    }

    public function delete($id) {
        $album_model = new AlbumModel();
        $song_model = new SongModel();
        try {
            $song_model->delete_song_by_album_id($id);
            $album_model->delete_album($id);
        } catch (Throwable $e) {
            return "?status-message=" . INTERNAL_ERROR;
        }
        return "?status-message=" . SUCCESS;
    }

    public function update_duration($id) {
    $song_model = new SongModel();
    $songs = $song_model->find_all_song_by_album_id($id);
    $total_duration = 0;
    foreach ($songs as $song) {
        $total_duration += $song['duration'];
        }
    $album_model = new AlbumModel();
    $album_model->update_album_duration($id, $total_duration);
    }
}