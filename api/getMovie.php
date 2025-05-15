<?php

require_once __DIR__ . '/../backend/includes.php';

try {
    validateRequest();
    $profile = idetifyUser();

    $movie_id = json_decode(file_get_contents("php://input"), true);
    if(!$movie_id || !is_int($movie_id)) {
        sendMessage('no movie id specified', 400);
        exit;
    }

    $movie = Backend::getMovieDetail($movie_id);
    sendJson(["ok" => true, "movie" => $movie]);
}
catch(BackendException $e) {
    sendMessage($e->getMessage(), $e->getCode());
}
catch(Throwable $e) {
    require __DIR__ . '/../backend/logger.php';
    Logger::log($e->getMessage());
    sendMessage("internal server error", 500);
}
