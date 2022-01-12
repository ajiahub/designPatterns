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

    public function calculateBalance($value)
    {
        $this->setBalance($this->getBalance() - $value);
    }

    public function haveBalanceAvailable($value)
    {
        return $this->getBalance() >= $value;
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

        if (!$customer->getAccount()->haveBalanceAvailable($value)) {
            throw new NoBalanceAvailableException();
        }

        /*..... something.....*/

        $this->setValue($value);
        $customer->getAccount()->calculateBalance($value);
    }

    public function calculateTotalValue(array $products)
    {
        $value = 0;

        foreach ($products as $product) {
            $value += $product->getValue();
        }

        return $value;
    }
}