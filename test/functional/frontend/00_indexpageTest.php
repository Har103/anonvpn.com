<?php
/**
 * Requirements for index page.
 * 
 * The index page must:
 *   - display logo with non-empty alt=""
 *   - explain pricing
 *   - allow to order
 *   - display Google Checkout logo
 * 
 * The index page must link to:
 *   - login
 *   - help
 *   - blog
 *   - server list
 *   
 * Google Checkout button must follow google policies:
 * http://code.google.com/apis/checkout/developer/Google_Checkout_XML_API.html#google_checkout_buttons
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
    
    // @todo make url precise
    ->info('footer has Google Checkout logo')
    ->xPath('//div[@id="footer"]//img[contains(@src, "checkout.google.com")]')
    
    // @todo generate urls using symfony routing
    ->info('links to /login')
    ->xPath('//a[contains(@href, "/login")]')
    
    ->info('links to /help')
    ->xPath('//a[contains(@href, "/help")]')
    
    ->info('links to /blog')
    ->xPath('//a[contains(@href, "/blog")]')
    
    ->info('links to /servers')
    ->xPath('//a[contains(@href, "/servers")]')
    
    // @todo ensure google policies
    
  ->end()
;
