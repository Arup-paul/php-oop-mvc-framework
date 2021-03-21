<?php


namespace app\core\exceptions;


class ForbiddenException extends  \Exception
{
    protected $message = 'You Don\'t have permission to access this page';
    protected $code = 403;
}




