<?php

/**
 * Server form.
 *
 * @package    anonvpn.com
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServerForm extends BaseServerForm
{
  public function configure()
  {
    unset($this['ip']);
  }
}
