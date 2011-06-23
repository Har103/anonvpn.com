<?php

require_once dirname(__FILE__) . '/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    if (!setlocale(LC_ALL, 'en_US.UTF-8'))
    {
      throw new RuntimeException('Unable to set locale en_US.UTF-8');
    }

    self::enableZendFramework();

    // enable TwoCheckout autoloading
    set_include_path(get_include_path() . PATH_SEPARATOR . sfConfig::get('sf_lib_dir') . DIRECTORY_SEPARATOR . 'vendor');
    self::enableZendFramework()->registerNamespace('TwoCheckout_');

    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfTaskExtraPlugin');
    $this->enablePlugins('ggTestSuitePlugin');
    $this->enablePlugins('ioMenuPlugin');
    $this->enablePlugins('sfSimpleGoogleSitemapPlugin');
  }

  public function configureDoctrine(Doctrine_Manager $manager)
  {
    $manager->setCollate('utf8_unicode_ci');
    $manager->setCharset('utf8');
  }

  public static function get2CoApi()
  {
    static $api;

    if ($api === null)
    {
      $api = new TwoCheckout_Api('anonvpn.com', 'se5EezieC2');
    }

    return $api;
  }

  /**
   * If $path is false then the method assumes that ZF is already in include_path
   * and just enables autolader.
   *
   * @param string $path
   */
  public static function enableZendFramework($path = false)
  {
    static $autoloader = false;

    if (!$autoloader)
    {
      if (is_readable($path))
      {
        set_include_path(get_include_path() . PATH_SEPARATOR . $path);
      }
      require_once 'Zend/Loader/Autoloader.php';
      $autoloader = Zend_Loader_Autoloader::getInstance();
    }

    return $autoloader;
  }

}
