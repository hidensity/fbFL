<?php

namespace Dbb\AbstractClasses;

class SmartySetup extends \Smarty
{
    /** @var string */
    protected $templateFile;

    /**
     * SmartySetup constructor.
     * @param string $templateFile
     */
    public function __construct(string $templateFile)
    {
        parent::__construct();
        $this->template_dir = PROJECT_BASE_DIR . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;
        $this->config_dir = SMARTY_ROOT_DIR . DIRECTORY_SEPARATOR . 'conf';
        $this->compile_dir = SMARTY_ROOT_DIR . DIRECTORY_SEPARATOR . 'cache';

        $this->templateFile = $templateFile;
    }

    public function render()
    {
        $this->display($this->templateFile . '.tpl');
    }
}
