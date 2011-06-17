<?php

/**
 * Customer form.
 *
 * @package    anonvpn.com
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CustomerForm extends BaseCustomerForm
{
  public function configure()
  {
    $this->setValidator('email', new sfValidatorAnd(array(
      $this->getValidator('email'),
      new sfValidatorEmail(array(), array('invalid' => 'Invalid email.'))
    )));

    $this->configurePassword();

    unset($this['created_at']);
  }

  protected function configurePassword()
  {
    $this->setWidget('password', new sfWidgetFormInputText(
      array(),
      array('value' => $this->getObject()->getPassword())
    ));
    $this->setValidator('password', new sfValidatorString(
      array('required' => false),
      array('max_length' => 64)
    ));

    return $this;
  }
}
