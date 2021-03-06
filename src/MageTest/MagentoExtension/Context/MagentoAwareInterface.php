<?php

namespace MageTest\MagentoExtension\Context;

use Mage_Core_Model_App as MageApp;
use MageTest\MagentoExtension\Service\ConfigManager,
    MageTest\MagentoExtension\Service\CacheManager,
    MageTest\MagentoExtension\Fixture\FixtureFactory,
    MageTest\MagentoExtension\Service\Session;


interface MagentoAwareInterface
{
    public function setApp(MageApp $app);
    public function setConfigManager(ConfigManager $config);
    public function setCacheManager(CacheManager $cache);
    public function setFixtureFactory(FixtureFactory $factory);
    public function setSessionService(Session $session);
}
