<?php

interface PaymentType
{
    public function pay($amount);
}

class CreditCard implements PaymentType
{
    public function pay($amount)
    {
        echo "Paid $amount via Credit Card.\n";
    }
}

class PayPal implements PaymentType
{
    public function pay($amount)
    {
        echo "Paid $amount via PayPal.\n";
    }
}

class BankTransfer implements PaymentType
{
    public function pay($amount)
    {
        echo "Paid $amount via Bank Transfer.\n";
    }
}

class PaymentStrategy
{
    private PaymentType $paymentType;

    public function setPaymentType(PaymentType $paymentType)
    {
        $this->paymentType = $paymentType;
    }

    public function checkoutAmount($amount)
    {
        if (!isset($this->paymentType)) {
            throw new Exception("Payment type is not set.");
        }
        $this->paymentType->pay($amount);
    }
}

try {
    $paymentStrategy = new PaymentStrategy();
    $paymentStrategy->setPaymentType(new CreditCard());
    $paymentStrategy->checkoutAmount(100);

    $paymentStrategy->setPaymentType(new PayPal());
    $paymentStrategy->checkoutAmount(200);

    $paymentStrategy->setPaymentType(new BankTransfer());
    $paymentStrategy->checkoutAmount(300);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}