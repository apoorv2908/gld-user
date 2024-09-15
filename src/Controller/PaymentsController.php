<?php
declare(strict_types=1);

namespace App\Controller;

use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use Cake\Routing\Router;


class PaymentsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Orders'); // Assuming you have an Orders model
        $this->apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AYXkibOYEdd1NuOrzkqYvPIJNFFe5iQCjqfzUQOn4Dvx_aRdx0F2xtxTgOsYI7NXFAxMscfOODXWtPLc',
                'EEUZVmqKRDYI9rrTnx0KeJpCFoO1BPjznHM7kHVWNSjWdMdh8xVW6CubBTw33KyoATXfHR01UU-s0iVW'
            )
        );
    }

    // src/Controller/PaymentsController.php

    public function createSession()
    {
        $amount = 100.00; // Amount in USD
        $orderName = 'Order #12345';
        
        $paypalLink = $this->createPayPalLink($amount, $orderName);
        
        // Redirect the user to the PayPal payment link
        return $this->redirect($paypalLink);
    }

    private function createPayPalLink($amount, $orderName) {
        $paypalUrl = "https://www.paypal.com/cgi-bin/webscr";
        $returnUrl = "https://yourwebsite.com/paypal_success";
        $cancelUrl = "https://yourwebsite.com/paypal_cancel";

        $queryParams = http_build_query([
            'cmd' => '_xclick',
            'business' => 'unitedlawhouse@gmail.com',
            'item_name' => $orderName,
            'amount' => $amount,
            'currency_code' => 'USD',
            'return' => $returnUrl,
            'cancel_return' => $cancelUrl,
        ]);

        return $paypalUrl . '?' . $queryParams;
    }



    public function paypalSuccess()
    {
        // Handle payment success, similar to your Stripe success method
    }

    public function paypalCancel()
    {
        $this->Flash->error(__('Payment was canceled.'));
        return $this->redirect(['action' => 'index']);
    }
}
