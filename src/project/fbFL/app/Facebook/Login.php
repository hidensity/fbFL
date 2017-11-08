<?php

namespace Dbb\Facebook;

use Dbb\AbstractClasses\SmartySetup;
use Facebook\Facebook;

class Login extends SmartySetup
{
    /** @var Facebook */
    protected $facebook;

    /**
     * Login constructor.
     */
    public function __construct()
    {
        parent::__construct('Facebook/Login');
        $this->assign('foo', 'Foo!');
        $this->render();
    }
}
