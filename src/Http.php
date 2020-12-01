<?php

namespace Orh\Tapd;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Http
{
    /**
     * 请求地址
     *
     * @var string
     */
    const BASE_URI = 'https://api.tapd.cn/';

    /**
     * HTTP 实例
     *
     * @var Client
     */
    public $client = null;

    /**
     * 初始化设置
     *
     * @param string $apiUser API 帐号
     * @param string $apiPassword API 口令
     *
     * @return void
     */
    public function __construct(string $apiUser, string $apiPassword)
    {
        $this->client = new Client([
            'base_uri' => self::BASE_URI,
            'headers' => $this->genAuthKey($apiUser, $apiPassword),
        ]);
    }

    /**
     * 生成认证信息
     *
     * @param string $apiUser API 帐号
     * @param string $apiPassword API 口令
     *
     * @return array
     */
    protected function genAuthKey(string $apiUser, string $apiPassword): array
    {
        $authKey = "{$apiUser}:{$apiPassword}";
        $authKey = base64_encode($authKey);

        return [
            'Authorization' => "Basic {$authKey}",
        ];
    }

    /**
     * 返回方法大写形式
     *
     * @param string $method 方法
     *
     * @return string
     */
    protected function getMethod(string $method): string
    {
        return strtoupper($method);
    }

    /**
     * 基础请求
     *
     * @param string $method 请求方法
     * @param string $uri 请求 uri
     * @param array  $options 请求项
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request(string $method = 'GET', string $uri = '', array $options = []): ResponseInterface
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (\Throwable $e) {
            return [];
        }
    }

    /**
     * GET 请求
     *
     * @param string $uri 请求 uri
     * @param array  $options 请求项
     *
     * @return array
     */
    public function get(string $uri = '', array $options = []): array
    {
        $method = $this->getMethod(__FUNCTION__);

        return $this->request($method, $uri, $options);
    }

    /**
     * POST 请求
     *
     * @param string $uri 请求 uri
     * @param array  $options 请求项
     *
     * @return array
     */
    public function post(string $uri = '', array $options = []): array
    {
        $method = $this->getMethod(__FUNCTION__);

        return $this->request($method, $uri, $options);
    }
}
