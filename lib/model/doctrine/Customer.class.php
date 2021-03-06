<?php

/**
 * Customer
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    anonvpn.com
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Customer extends BaseCustomer
{
  public function __toString()
  {
    return $this->getEmail();
  }

  public function setPassword($password)
  {
    // do not save empty strings!
    if (!is_string($password) || $password == '') return;

    $radcheck = $this->getPassRadcheck();

    $radcheck->setValue($password);
    $radcheck->save();

    return $this;
  }

  public function getPassword()
  {
    return $this->getPassRadcheck()->getValue();
  }

  /**
   * Returns new or existing radcheck of:
   *   Cleartext-Password := ?
   */
  public function getPassRadcheck()
  {
    $radcheck =
    RadcheckTable::getInstance()->createQuery()
      ->andWhere('customer_id = ?', $this->getId())
      ->andWhere('attr = "Cleartext-Password"')
      ->andWhere('op = ":="')
      ->execute();

    if(count($radcheck) === 0)
    {
      $radcheck = new Radcheck();
      $radcheck->setCustomer($this);
      $radcheck->setAttr('Cleartext-Password');
      $radcheck->setOp(':=');
    }
    else if (count($radcheck) === 1)
    {
      $radcheck = $radcheck[0];
    }
    else
    {
      throw new LogicException('There is more than 1 Cleartext-Password radchecks for customer ' . $this->getId());
    }

    return $radcheck;
  }
}
