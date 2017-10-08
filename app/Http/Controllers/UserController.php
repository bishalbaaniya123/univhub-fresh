<?php

namespace App\Http\Controllers;

use GuzzleController;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * instance of Guzzle Controller
     */
    protected $guzzleController;

    /**
     * constructor for user controller
     */
    public function __contruct(GuzzleController $guzzleController)
    {
        $this->guzzleController = $guzzleController;
    }

    /**
     * logs in user with provided credentials
     *
     * @param Request $request
     * @return Response
     */
    public function login(Request $request)
    {
        $response = $this->guzzleController->request();
    }

    /**
     * clears user session upon request
     *
     * @param Request $request
     * @return Response
     */
    public function logout(Request $request)
    {
    }

    /**
     * register new user account to the system
     *
     * @param Request $request
     */
    public function register(Request $request)
    {
    }

    /**
     * reset user's forgotten password following required procedure/link
     *
     * @param Request $request
     */
    public function resetPassword(Request $request)
    {
    }

    /**
     * helps user to change their account's password
     *
     * @param Request $request
     */
    public function changePassword(Request $request)
    {
    }

    /**
     * generates forgotten password reset link/procedure and sends it to the
     * user through some medium (mail, sms or something else)
     *
     * @param Request $request
     */
    public function requestResetPassword(Request $request)
    {
    }
}
