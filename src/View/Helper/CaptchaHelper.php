<?php
declare(strict_types=1);

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\Helper\FormHelper;

class CaptchaHelper extends Helper
{
    public $helpers = ['Form'];

    public function display(): string
    {
        $random = rand(1000, 9999);
        $this->getView()->getRequest()->getSession()->write('captcha', $random);
        return '<div class="captcha-code"><strong>CAPTCHA:</strong> ' . $random . '</div>';
    }
}
