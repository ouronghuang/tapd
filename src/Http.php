<?php

namespace Orh\Tapd;

use GuzzleHttp\Client;
use Orh\Tapd\Exceptions\HttpException;
use Orh\Tapd\Exceptions\RequestException;

class Http
{
    /**
     * 请求地址
     *
     * @var string
     */
    const BASE_URI = 'https://api.tapd.cn/';

    /**
     * HTTP 实例.
     *
     * @var Client
     */
    protected $client = null;

    /**
     * 初始化设置.
     *
     * @param string $apiUser     API 帐号
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
     * 生成认证信息.
     *
     * @param string $apiUser     API 帐号
     * @param string $apiPassword API 口令
     */
    protected function genAuthKey(string $apiUser, string $apiPassword): array
    {
        $authKey = "{$apiUser}:{$apiPassword}";
        $authKey = base64_encode($authKey);

        return [
            'Accept' => 'application/json',
            'Authorization' => "Basic {$authKey}",
        ];
    }

    /**
     * 基础请求
     *
     * @param string $method  请求方法
     * @param string $uri     请求 uri
     * @param array  $options 请求项
     *
     * @throws
     */
    public function request(string $method = 'GET', string $uri = '', array $options = []): array
    {
        try {
            $response = $this->client->request($method, $uri, $options);
            $result = json_decode($response->getBody(), true);

            if (1 != $result['status']) {
                throw new RequestException($result['info']);
            }

            $data = $result['data'];

            if (! is_array($result['data'])) {
                return $data ? compact('data') : [];
            }

            return $data;
        } catch (\Throwable $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * GET 请求
     *
     * @param string $uri   请求 uri
     * @param array  $query 表单参数
     *
     * @throws
     */
    public function get(string $uri = '', array $query = []): array
    {
        $method = 'GET';
        $options = [
            'query' => $query,
        ];

        return $this->request($method, $uri, $options);
    }

    /**
     * POST 请求
     *
     * @param string $uri  请求 uri
     * @param array  $data 请求项
     *
     * @throws
     */
    public function post(string $uri = '', array $data = []): array
    {
        $method = 'POST';
        $options = [
            'json' => $data,
        ];

        return $this->request($method, $uri, $options);
    }
}
