<?php

/**
 * checkout actions.
 *
 * @package    anonvpn.com
 * @subpackage checkout
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class checkoutActions extends sfActions
{
  /**
   * 2checkout.com returns customer to this url
   * after successful checkout.
   *
   * @param sfWebRequest $request
   */
  public function executeApproved(sfWebRequest $request)
  {
    $this->getResponse()->setTitle('Checkout approved. Welcome to anonVPN.');

    $this->errors = array();

    // validate MD5
    if (!sfConfig::get('sf_debug', false))
    {
      $validator =
      new sfValidator2coHash(
        array('order_number' => $request->getParameter('order_number'), 'total' => $request->getParameter('total')),
        array('invalid' => 'Invalid key.')
      );
      try {
        $validator->clean($request->getParameter('key'));
      } catch (sfValidatorError $e) {
        $this->errors[] = $e;
      }
    }

    // do nothing if order already exists
    $validator =
    new sfValidatorDoctrineUniqueNoupdate(
      array('model' => 'Order', 'column' => 'id', 'throw_global_error' => true),
      array('required' => 'order_number is required', 'invalid' => 'There is already order with the same id exists.')
    );
    try {
      $validator->clean($request->getParameter('order_number'));
    } catch (sfValidatorError $e) {
      $this->errors[] = $e;
    }

    // check that product exists
    $validator =
    new sfValidatorDoctrineChoice(
      array('model' => 'Product'),
      array('required' => 'Product SKU is required.', 'invalid' => 'Product not found.')
    );
    try {
      $validator->clean($request->getParameter('merchant_product_id'));
    } catch (sfValidatorError $e) {
      $this->errors[] = $e;
    }

    // check that email is valid
    $validator =
    new sfValidatorEmail(
      array(),
      array('invalid' => 'Invalid email address.', 'required' => 'Email is not found.')
    );
    try {
      $validator->clean($request->getParameter('email'));
    } catch (sfValidatorError $e) {
      $this->errors[] = $e;
    }

    // abort if there is errors
    if ($this->errors)
    {
      return sfView::ERROR;
    }

    // get or create a customer
    $this->customer = CustomerTable::getInstance()->findOneByEmail($request->getParameter('email'));
    if (!$this->customer)
    {
      $this->customer = new Customer();
      $this->customer->setEmail($request->getParameter('email'));
      $this->customer->setPassword(trim(`pwgen -1`));
      $this->customer->save();
    }

    // record order
    $this->order = new Order();
    $this->order->setId($request->getParameter('order_number'));
    $this->order->setCustomer($this->customer);
    $this->order->setSku($request->getParameter('merchant_product_id'));
    $this->order->save();
  }
}