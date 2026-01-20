<?php
declare(strict_types=1);
if (session_staus() === PHP_SESSION_NONE){
    session_start();
}

function require_legin(): void {
    if (!isset($_SESSION["user_id"]))
    {
        header("Location: /student-gym-meal-planner/auth/login.php");
        exit;
    }
}

function current_user_id(): ?int{
    return $_SESSION["user_id"] ?? null;
}
funtion current_user_name(): string{
    return $_SESSION["user_name"] ?? "User";
}