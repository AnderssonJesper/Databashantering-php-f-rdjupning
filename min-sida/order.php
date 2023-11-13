<?php

class Orders
{

    protected $order_id = null;
    protected $customer_id = null;
    protected $order_date = null;
    protected $total_amount = null;

    function __construct($order_id, $customer_id, $order_date, $total_amount)
    {
        $this->order_id = $order_id;
        $this->customer_id = $customer_id;
        $this->order_date = $order_date;
        $this->total_amount = $total_amount;

    }
    
    public function getOrder_id(){
        return $this->order_id;
    }
    public function setCustomerId($customer_id){
         $this->customer_id = $customer_id;
    }
    public function getCustomerId(){
         return $this->customer_id;
    }

    function setOrder_id($order_id)
    {
        if (empty($order_id) == false) {
            $this->order_id = $order_id;
        }
    }

    function getTotal_amount()
    {
        return $this->total_amount;
    }

    function print()
    {
        echo "Customer:" . $this->order_id . "<br/>";
        echo "Total: " . $this->total_amount . "<br/>";
    }
}

$idAttLadda = 8;
$customer = new Orders($idAttLadda);
$customer->setOrder_id("Eriksson");
$customer->print();
