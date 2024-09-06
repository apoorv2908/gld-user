<?php
declare(strict_types=1);

namespace App\Controller;


class OrdersController extends AppController {

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('PayPal.PayPal', []);
    }

    public yourPaymentAction($order) {
        foreach ($order['OrderedItem'] as $orderedItem)
        {
            $quantity = $orderedItem['quantity'];
            $price = $orderedItem['price'];
            $itemName = $orderedItem['name'];
            $itemId = $orderedItem['id'];

            // money values are always integer values in cents
            $this->PayPal->AddArticle($itemName, $quantity, $price, $itemId);
        }

        // optional shipping fee
        $this->PayPal->Shipping = 123; // money values are always integer values in cents

        // Url the client is redirected to when PayPal payment is performed successfully
        // NOTE: This does not mean that the payment is COMPLETE.
        $okUrl = Router::url('/paymentOk', true);

        // Url the client is redirected to whe PayPal payment fails or was cancelled
        $nOkUrl = Router::url('/paymentFailed', true);

        return $this->PayPal->PaymentRedirect($order['id'], $okUrl, $nOkUrl);
    }
}
