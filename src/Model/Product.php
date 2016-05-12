<?php

namespace App\Model;

/**
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class Product
{
	/**
	 * Product name.
	 * 
	 * @var string
	 */
	protected $product;

	/**
	 * Set product name.
	 * 
	 * @param array $product the product name
	 */
	public function setProduct($product)
	{
		$this->product = $product;
	}

	/**
	 * Get product name.
	 * 
	 * @return string
	 */
	public function getProduct()
	{
		return $this->product;
	}

}