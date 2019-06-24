<?php

namespace solid\SingleResponsability;

class NoBalanceAvailableException extends \Exception
{
}

class Product
{
    public function getValue()
    {
    }
}

class Account
{
    public function getBalance()
    {
    }

    public function setBalance()
    {
    }
}

class Customer
{
    public function getAccount()
    {
    }
}

class Sale
{
    public function getValue()
    {
    }

    public function setValue()
    {
    }

    public function sell(array $products, Customer $customer)
    {
        $value = $this->calculateTotalValue($products);

        if (!$this->haveBalanceAvailable($customer, $value)) {
            throw new NoBalanceAvailableException();
        }

        /*..... something.....*/

        $this->setValue($value);
        $this->calculateBalance($customer);
    }

    public function calculateBalance(Customer $customer)
    {
        $customer->getAccount()->setBalance($customer->getAccount()->getBalance() - $this->getValue());
    }

    public function haveBalanceAvailable(Customer $customer, $value)
    {
        return $customer->getAccount()->getBalance() >= $value;
    }

    private function calculateTotalValue(array $products)
    {
        $value = 0;

        foreach ($products as $product) {
            $value += $product->getValue();
        }

        return $value;
    }
}