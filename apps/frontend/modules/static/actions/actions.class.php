<?php

/**
 * static actions.
 *
 * @package    anonvpn.com
 * @subpackage static
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staticActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeHome(sfWebRequest $request)
  {
    $this->getResponse()->setTitle('anonVPN - Anonymous Internet Service Provider');
  }
}
