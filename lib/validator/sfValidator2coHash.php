<?php

class sfValidator2coHash extends sfValidatorString
{
  /**
   * Options:
   *
   *  * order_number  required
   *  * total         required
   *
   * @see sfValidatorString::configure()
   */
  protected function configure($options = array(), $messages = array())
  {
    parent::configure($options, $messages);

    $this->addRequiredOption('order_number');
    $this->addRequiredOption('total');

    $this->setOption('min_length', 32);
    $this->setOption('max_length', 32);
  }

  protected function doClean($value)
  {
    $clean = parent::doClean($value);

    $hash = strtoupper(md5(sfConfig::get('app_2co_secret') . sfConfig::get('app_2co_vendor_id')
                        . $this->getOption('order_number') . $this->getOption('total')));

    if ($clean !== $hash)
    {
      throw new sfValidatorError($this, 'invalid');
    }

    return $clean;
  }
}