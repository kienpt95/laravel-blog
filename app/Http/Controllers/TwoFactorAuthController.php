<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OTPHP\TOTP;
use Illuminate\Support\Facades\Auth;

class TwoFactorAuthController extends Controller
{
    private $__2FA;
    /**
     * @var Singleton The reference to *Singleton* instance of this class $instance
     */
    private static $instance;

    /**
     * Singleton design pattern
     * @param $user
     * @return Singleton The *Singleton* instance
     */
    public static function getInstance($user)
    {
        if (null === static::$instance){
            static::$instance = new TOTP(
                getenv('APP_NAME'),
                $user,
                getenv('TFA_KEY')
            );
        }
        return static::$instance;
    }

    function __construct(Request $request)
    {
        //TODO: get user by Auth facade -> label for TOTP
        //now : user always return null value
        $user = Auth::guard('api')->user();
        $this->__2FA = self::getInstance($user);
    }

    /**
     * checkpoint TwoFactorAuth
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function index()
    {
        return view('auth.checkpoint');
    }

    /**
     * validator 2 factor auth code
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validate2FA(Request $request)
    {
        $auth_code = $request->input('auth_code');

        if ($this->__2FA->verify($auth_code)) {
            $request->session()->put('2FA', true);
            return redirect()->route('admin_dashboard');
        } else {
            $request->session()->put('2FA', false);
            return redirect()->route('checkpoint');
        }
    }
}
