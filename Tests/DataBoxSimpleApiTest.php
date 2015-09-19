<?php

use Defr\CzechDataBox\DataBox;

/**
 * Tested on my personal data box.
 *
 * Class DataBoxSimpleApiTest
 */
class DataBoxSimpleApiTest extends PHPUnit_Framework_TestCase
{

    /**
     * @return DataBox
     */
    private function __getDataBox()
    {
        $dataBox = new DataBox();
        $dataBox->loginWithUsernameAndPassword($_ENV['DATABOX_LOGIN'], $_ENV['DATABOX_PASSWORD'], $_ENV['DATABOX_PRODUCTION']);

        return $dataBox;
    }

    public function testSimpleApiFindDataBox()
    {
        $api = $this->__getDataBox()->getSimpleApi();
        $foundDataBox = $api->findDataBoxById('wucb4dd')->getDbOwnerInfo();
        $this->assertEquals("Dennis", $foundDataBox->getPnFirstName());
        $this->assertEquals("Fridrich", $foundDataBox->getPnLastName());
    }

    public function testSimpleApiStats()
    {
        $api = $this->__getDataBox()->getSimpleApi();
        $this->assertInternalType("int", $api->getStats());
    }

    public function testSimpleApiPasswordChange()
    {
        $api = $this->__getDataBox()->getSimpleApi();
        $this->assertNull($api->getPasswordExpires());
    }
}