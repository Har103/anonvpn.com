<?php

/**
 * Server
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    anonvpn.com
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Server extends BaseServer
{
  public function setHostname($hostname)
  {
    $ip = gethostbyname($hostname);
    if ($ip !== $hostname)
    {
      $this->_set('ip', $ip);
    }
    else
    {
      throw new RuntimeException('Could not resolve ' . $hostname);
    }

    return $this->_set('hostname', $hostname);
  }

  public function setIp($ip)
  {
    throw new RuntimeException('Cannot directly set ip address. Set hostname instead.');
  }

  /**
   * Before insert we will find a first available id from range 1..255
   * The requirement is to keep ids sequence without holes.
   *
   * See this thread:	http://forums.mysql.com/read.php?10,424597
   */
  public function preInsert($event)
  {
    $this->setId($this->findFreeId());
  }

  public function findFreeId()
  {
    $ids =
    $this->getTable()->createQuery()
      ->select('id')
      ->setHydrationMode(Doctrine::HYDRATE_SINGLE_SCALAR)
      ->execute();

    return min(array_diff(range(1, 255), $ids));
  }
}