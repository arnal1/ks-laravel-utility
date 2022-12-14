<?php

namespace Kastana\KsLaravelUtility\Helpers;

class Response
{
    public static function success(string $redirect, $title = '', $message ='')
    {
        $title = $title == '' ? __('response.success') : $title;
        toastr()->success($title, $message);

        return self::redirect($redirect);
    }

    public static function error(string $redirect, $title = '', $message ='')
    {
        $title = $title == '' ? __('response.error') : $title;
        toastr()->error($title, $message);

        return self::redirect($redirect);
    }

    public static function redirect(string $redirect)
    {
        if ($redirect == 'back') {
            return back();
        }

        return redirect($redirect);
    }
}
