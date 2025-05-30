<?php

require_once __DIR__ . '/../backend/includes.php';

try {
    validateRequest();
    $user = idetifyUser(false);

    $profile_id = json_decode(file_get_contents("php://input"), true);
    if(!$profile_id || !is_string($profile_id)) {
        sendMessage('no profile id specified', 400);
        exit;
    }

    $profile = Backend::getProfile($profile_id);
    $user['profile_id'] = $profile_id;
    $token = Auth::newToken($user);

    sendJson(['ok' => true, 'profile' => $profile]);
}
catch(BackendException $e) {
    sendMessage($e->getMessage(), $e->getCode());
}
catch(Throwable $e){
    require __DIR__ . '/../backend/logger.php';
    Logger::log($e->getMessage());
    sendMessage("internal server error", 500);
}

