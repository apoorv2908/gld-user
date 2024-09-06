<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Routing\Router;

class MyPayPalComponent extends Component
{
    protected $_defaultConfig = [];

    public function createPayment($amount, $description, $orderId)
    {
        // PayPal business account email
        $paypalBusinessEmail = 'sb-mt0uu32423150@business.example.com';

        // Base PayPal URL for redirecting to payment
        $paypalBaseUrl = 'https://www.sandbox.paypal.com/cgi-bin/webscr';

        // URLs for PayPal to redirect after success or cancellation
        $returnUrl = Router::url(['controller' => 'Payments', 'action' => 'paymentSuccess'], true);
        $cancelUrl = Router::url(['controller' => 'Payments', 'action' => 'paymentCancel'], true);
        $notifyUrl = Router::url(['controller' => 'Payments', 'action' => 'paymentNotify'], true);

        // PayPal parameters
        $queryParams = [
            'cmd' => '_xclick',
            'business' => $paypalBusinessEmail,
            'item_name' => 'Test Order',
            'amount' => 29.00,
            'currency_code' => 'USD', // Adjust currency as needed
            'return' => $returnUrl . '?order_id=' . $orderId,
            'cancel_return' => $cancelUrl . '?order_id=' . $orderId,
            'notify_url' => $notifyUrl,
            'custom' => $orderId, // Store the order ID for reference
        ];

        // Build and return the complete PayPal URL
        return $paypalBaseUrl . '?' . http_build_query($queryParams);
    }
}
