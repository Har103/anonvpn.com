<?php

/**
 * servers actions.
 *
 * @package    anonvpn.com
 * @subpackage servers
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class serversActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->getResponse()->setTitle('Servers list - anonVPN');

    $this->servers = Doctrine::getTable('Server')->findAll();
  }

  public function executeUnlimited(sfWebRequest $request)
  {

  }

  public function executeMetered(sfWebRequest $request)
  {

  }
}
