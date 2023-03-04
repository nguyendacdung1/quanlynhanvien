<?php

namespace App\Http\Controllers;

use App\Http\Service\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function index(){
        $users = $this->userService->getUsers();

        return view('user.index', compact('users'));
    }
}
