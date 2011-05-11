<?php
/**
 * Requirements for index page.
 * 
 * The index page must:
 *   - display logo with non-empty alt=""
 *   - explain pricing
 *   - allow to order
 *   - display payment methods logos
 * 
 * The index page must link to:
 *   - login
 *   - help
 *   - blog
 *   - server list
 *   
 * @see doc/use cases.dia
 */

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());
$browser->setTester('response', 'ggTesterResponse');

$browser->get('/')
  ->with('response')->begin()
    ->isStatusCode(200)
    ->isValid()
    
    ->info('logo exists and has non-empty alt attribute')
    ->xPath('//img[contains(@src, "images/anonvpn_logo.png") and string-length(@alt)>0]', 1)
    
    ->info('pricing displayed')
    ->checkElement('div#pricing', 1)
    
    ->info('link to checkout exists')
    ->xPath('//a[contains(@href, "/checkout")]')
    
    // @todo list all available methods
    ->info('footer has payment methods logos')
    ->xPath('//div[@id="footer"]//img[contains(@src, "/images/logo/visa.png")]')
    ->xPath('//div[@id="footer"]//img[contains(@src, "/images/logo/mastercard.png")]')
    ->xPath('//div[@id="footer"]//img[contains(@src, "/images/logo/paypal.png")]')
    ->xPath('//div[@id="footer"]//img[contains(@src, "/images/logo/2checkout.png")]')
    
    // @todo generate urls using symfony routing
    ->info('links to /login')
    ->xPath('//a[contains(@href, "/login")]')
    
    ->info('links to /help')
    ->xPath('//a[contains(@href, "/help")]')
    
    ->info('links to /blog')
    ->xPath('//a[contains(@href, "/blog")]')
    
    ->info('links to /servers')
    ->xPath('//a[contains(@href, "/servers")]')
    
  ->end()
;
