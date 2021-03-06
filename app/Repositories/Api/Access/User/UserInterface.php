<?php

namespace App\Repositories\Api\Access\User;

interface UserInterface
{
    public function findByEmail($email);

    public function findById($id);

    public function findOrCreateSocial(array $data);

    public function loginVerification(array $data);

    public function createUser(array $data);

    public function changePassword(array $data);

    public function getUserDetail();

    public function mPinloginVerification(array $data);

    public function setMpin(array $data);

    public function sendOtpForForgotPassword(array $data);

    public function confirmOtpForForgotPassword(array $data);

    public function resetPassword(array $data);
}
