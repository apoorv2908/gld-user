<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Log\Log;

class PaymentsController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('MyPayPal'); // Load your custom PayPal component
        $this->loadModel('Subscription'); // Load the Subscription model
    }

    public function accessPayment($orderId)
    {
        // Retrieve the subscription details
        $subscription = $this->Subscription->get($orderId);

        // Define payment details
        $amount = (float)$subscription->amt; // Ensure the amount is a float
        $description = 'Order #' . $orderId;

        // Create a payment and get approval URL
        $approvalUrl = $this->MyPayPal->createPayment($amount, $description, $orderId);

        // Redirect to PayPal for payment
        return $this->redirect($approvalUrl);
    }

    public function paymentSuccess()
    {
        // Retrieve PayPal payment details (e.g., from query parameters)
        $transactionId = $this->request->getQuery('tx');
        $orderId = $this->request->getQuery('order_id');

        if ($transactionId && $orderId) {
            // Update subscription status in the database
            $subscription = $this->Subscription->get($orderId);
            $subscription->status = 1; // Set status to paid
            $subscription->transaction_id = $transactionId; // Save the transaction ID

            if ($this->Subscription->save($subscription)) {
                $this->Flash->success(__('Payment was successful.'));

                // Redirect to the desired page after successful payment
                return $this->redirect(['action' => 'index']);
            }
        }

        // If something goes wrong
        $this->Flash->error(__('Something went wrong. Please contact support.'));
        return $this->redirect(['action' => 'index']);
    }

    public function paymentCancel()
    {
        // Handle the payment cancellation
        $this->Flash->error(__('Payment was canceled.'));
        return $this->redirect(['action' => 'index']);
    }

    public function paymentNotify()
    {
        // Handle PayPal IPN (Instant Payment Notification)
        Log::write('info', 'PayPal IPN received');
        
        // Here you can validate the IPN message and update your records accordingly
        $data = $this->request->getData();
        Log::write('debug', $data);

        // Process the IPN notification (e.g., update order status, log the event)
    }
}
