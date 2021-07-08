<?php

namespace Controller;

include "../services/AuthService.php";

use Services\AuthService;


class AuthController
{
    public AuthService $authService;
    public function __construct()
    {
        $this->authService = new AuthService();
    }
    public function Login(): bool
    {
        return $this->authService->checkLogin($_REQUEST);
    }
}
