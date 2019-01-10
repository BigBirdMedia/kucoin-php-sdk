<?php

namespace KuCoin\SDK\Tests;

use KuCoin\SDK\KuCoinApi;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected $apiKey;
    protected $apiSecret;
    protected $apiPassPhrase;

    protected function setUp()
    {
        parent::setUp();

        $this->apiKey = constant('API_KEY');
        $this->apiSecret = constant('API_SECRET');
        $this->apiPassPhrase = constant('API_PASSPHRASE');
        KuCoinApi::setBaseUri(constant('API_BASE_URI'));
    }

    protected function assertPagination($data)
    {
        $this->assertInternalType('array', $data);
        $this->assertArrayHasKey('totalNum', $data);
        $this->assertArrayHasKey('totalPage', $data);
        $this->assertArrayHasKey('pageSize', $data);
        $this->assertArrayHasKey('currentPage', $data);
        $this->assertArrayHasKey('items', $data);
        $this->assertInternalType('array', $data['items']);
    }
}