<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;

class CaptchaComponent extends Component
{
    public function generateCaptcha(): string
    {
        // Generate a simple random string for the CAPTCHA
        $captcha = (string)rand(1000, 9999);

        // Store the CAPTCHA value in the session
        $session = $this->getController()->getRequest()->getSession();
        $session->write('captcha', $captcha);

        return $captcha;
    }

    public function verify(string $input): bool
    {
        // Get the CAPTCHA value stored in the session
        $session = $this->getController()->getRequest()->getSession();
        $sessionCaptcha = $session->read('captcha');

        // Compare the user's input with the stored CAPTCHA value
        return $input === $sessionCaptcha;
    }

    public function clearCaptcha(): void
    {
        // Clear the CAPTCHA value from the session after verification
        $session = $this->getController()->getRequest()->getSession();
        $session->delete('captcha');
    }
}
