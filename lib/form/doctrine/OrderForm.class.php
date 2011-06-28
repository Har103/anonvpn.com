<?php

/**
 * Order form.
 *
 * @package    anonvpn.com
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OrderForm extends BaseOrderForm
{
  public function configure()
  {
    $this->configureId();

    unset($this['created_at']);
  }

  /**
   * ID must:
   *  - be an integer greater than 0
   *  - not exist
   *  - be a valid 2CO order number
   *    or be for internal use (less than 65536)
   *
   * @todo sfValidator2CheckoutOrder
   */
  protected function configureId()
  {
    $this->setWidget('id', new sfWidgetFormInputText());
    if (!$this->isNew())
    {
      $this->setDefault('id', $this->getObject()->getId());
    }

    // all these validators must pass
    $validators = array();

    // check for a number
    $validators[] = new sfValidatorNumber(array('min' => 0));

    // new orders must not exist already
    if ($this->isNew())
    {
      $validators[] = new sfValidatorDoctrineUniqueNoupdate(array('model' => $this->getModelName(), 'column' => 'id'));
    }

    // existent orders must have the same id or a new unique one
    if (!$this->isNew())
    {
      // default sfValidatorDoctrineChoice is fine
      $validators[] = new sfValidatorOr(
        array(
          new sfValidatorChoice(array('choices' => array($this->getObject()->getId()))),
          new sfValidatorDoctrineUniqueNoupdate(array('model' => $this->getModelName(), 'column' => 'id'))
        )
      );
    }

    $this->setValidator('id', new sfValidatorAnd($validators, array('halt_on_error' => true)));
  }
}
