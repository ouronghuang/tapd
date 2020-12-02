<h1 align="center">
    Tencent Tapd Api for PHP.
</h1>

<p align="center">
    <a href="https://packagist.org/packages/orh/tapd">
        <img alt="Packagist PHP Version Support" src="https://img.shields.io/packagist/php-v/orh/tapd">
    </a>
    <a href="https://packagist.org/packages/orh/tapd">
        <img alt="Packagist Version" src="https://img.shields.io/packagist/v/orh/tapd">
    </a>
    <a href="https://packagist.org/packages/orh/tapd">
        <img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/orh/tapd">
    </a>
    <a href="https://github.com/ouronghuang/tapd">
        <img alt="GitHub tag (latest SemVer)" src="https://img.shields.io/github/v/tag/ouronghuang/tapd">
    </a>
    <a href="https://github.com/ouronghuang/tapd">
        <img alt="GitHub" src="https://img.shields.io/github/license/ouronghuang/tapd">
    </a>
</p>

## 安装

```
$ composer require orh/tapd
```

## 使用

```
<?php

use Orh\Tapd\Tapd;

$tapd = new Tapd();
$tapd->setHttp($apiUser, $apiPassword);

$tapd->story->list();
```

## 模块

```
TODO
```

## License

MIT
