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
  }
}
