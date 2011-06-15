<?php

require_once dirname(__FILE__) . '/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  protected $twocheckoutApi;

  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfTaskExtraPlugin');
    $this->enablePlugins('ggTestSuitePlugin');

    self::enableZendFramework(sfConfig::get('sf_lib_dir') . DIRECTORY_SEPARATOR . 'vendor');

    // enable TwoCheckout autoloading
    self::enableZendFramework()->registerNamespace('TwoCheckout_');
  }

  public function configureDoctrine(Doctrine_Manager $manager)
  {
    $manager->setCollate('utf8_unicode_ci');
    $manager->setCharset('utf8');
  }

  public function getTwocheckoutApi()
  {
    if ($this->twocheckoutApi === null)
    {
      $credentials = sfConfig::get('app_2co_api');
      $this->twocheckoutApi = new TwoCheckout_Api($credentials['username'], $credentials['password']);
    }

    return $this->twocheckoutApi;
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
