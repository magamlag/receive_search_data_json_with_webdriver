<?php
use \Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

require_once('vendor/autoload.php');

$serverUrl = 'http://localhost:4444/wd/hub';

// Chrome
$driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::chrome());
// Firefox
$driver->get('https://search.ipaustralia.gov.au/trademarks/search/advanced');
// Find search element by its id, write 'PHP' inside and submit
$driver->findElement(WebDriverBy::id('wordSearchTerms1')) // find search input element
->sendKeys('abc') // fill the search box
->submit(); // submit the whole form

// Read text of the element and print it to output
echo 'About to click to a button with text';

// Make sure to always call quit() at the end to terminate the browser session
$driver->quit();