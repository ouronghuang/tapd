<h1 align="center">
  Tencent Tapd Api For PHP
</h1>

<p align="center">
  <a href="https://packagist.org/packages/orh/tapd">
    <img alt="Packagist PHP Version Support" src="https://img.shields.io/packagist/php-v/orh/tapd">
  </a>
  <a href="https://packagist.org/packages/orh/tapd">
    <img alt="Packagist Version" src="https://img.shields.io/packagist/v/orh/tapd?color=df8057">
  </a>
  <a href="https://packagist.org/packages/orh/tapd">
    <img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/orh/tapd">
  </a>
  <a href="https://github.com/ouronghuang/tapd">
    <img alt="StyleCI Build Status" src="https://github.styleci.io/repos/317795483/shield?style=flat">
  </a>
  <a href="https://github.com/ouronghuang/tapd">
    <img alt="Build Status" src="https://travis-ci.org/ouronghuang/tapd.svg?branch=master">
  </a>
</p>

按照 [TAPD API 文档](https://www.tapd.cn/help/view#1120003271001002318) 实现了所有接口

## 安装

```
$ composer require orh/tapd
```

## 使用

1. 初始化

```php
use Orh\Tapd\Tapd;

$apiUser = '';
$apiPassword = '';

$tapd = new Tapd($apiUser, $apiPassword);
// $tapd->setHttp($apiUser, $apiPassword);
```

2. 按模块使用

```php
// $tapd->{$module}->{$method}();

$data = [];
$query = [];

$tapd->boardcard->store($data);
$tapd->bug->getLinkBugs($query);
$tapd->story->list($query);
```

## 模块对应的类及其方法

```
.
├── boardcard「看板工作项」
│   ├── list()「获取看板工作项接口」
│   ├── store()「新建看板工作项」
│   └── update()「更新看板工作项」
│
├── bug「缺陷」
│   ├── list()「获取缺陷接口」
│   ├── count()「缺陷计数接口」
│   ├── groupCount()「缺陷统计接口」
│   ├── store()「添加缺陷接口」
│   ├── update()「更新缺陷接口」
│   ├── customFieldsSettings()「获取缺陷自定义字段配置」
│   ├── changes()「获取缺陷变更历史接口」
│   ├── changesCount()「获取缺陷变更历史数量」
│   └── getLinkBugs()「获取缺陷与其它缺陷的所有关联关系」
│
├── comment「评论」
│   ├── list()「获取评论接口」
│   ├── count()「获取评论数量接口」
│   ├── store()「添加评论接口」
│   └── update()「更新评论接口」
│
├── iteration「迭代」
│   ├── list()「获取迭代接口」
│   ├── count()「迭代计数接口」
│   ├── store()「创建迭代」
│   ├── update()「更新迭代」
│   └── customFieldsSettings()「获取迭代自定义字段配置」
│
├── launchform「发布评审」
│   ├── list()「获取发布评审接口」
│   ├── count()「获取发布评审数量接口」
│   └── customFieldsSettings()「获取发布评审自定义字段配置」
│
├── module「模块」
│   ├── list()「获取模块接口」
│   ├── count()「获取模块数量接口」
│   ├── store()「新建模块接口」
│   └── update()「更新模块接口」
│
├── relation「关联关系」
│   └── list()「获取关联关系接口」
│
├── release「发布计划」
│   ├── list()「获取发布计划接口」
│   └── count()「获取发布计划数量接口」
│
├── role「项目角色」
│   └── list()「获取项目角色接口」
│
├── story「需求」
│   ├── list()「获取需求接口」
│   ├── count()「需求计数接口」
│   ├── store()「新建需求接口」
│   ├── update()「更新需求接口」
│   ├── customFieldsSettings()「获取需求自定义字段配置」
│   ├── getLinkStories()「获取需求与其它需求的所有关联关系」
│   ├── changes()「获取需求变更历史接口」
│   ├── changesCount()「获取需求变更次数」
│   ├── categories()「获取需求分类接口」
│   ├── categoriesCount()「获取需求分类数量」
│   ├── getStoryTcase()「获取需求与测试用例关联关系接口」
│   └── updateStorySelectFieldOptions()「更新需求下拉类型自定义字段候选值」
│
├── task「任务」
│   ├── list()「获取任务接口」
│   ├── count()「任务计数接口」
│   ├── store()「新建任务接口」
│   ├── update()「更新任务接口」
│   ├── customFieldsSettings()「获取任务自定义字段配置」
│   ├── changes()「获取任务变更历史」
│   └── changesCount()「获取任务变更次数」
│
├── test「测试用例」
│   ├── list()「获取测试用例接口」
│   ├── count()「获取测试用例数量」
│   ├── store()「创建测试用例」
│   ├── update()「更新测试用例」
│   ├── plans()「获取测试计划接口」
│   ├── plansCount()「获取测试计划数量」
│   ├── categories()「获取测试用例目录接口」
│   ├── categoriesCount()「获取测试用例目录数量」
│   ├── result()「获取测试用例执行结果」
│   └── getStoryByTcaseId()「获取测试用例关联的需求接口」
│
├── timesheet「工时花费」
│   ├── list()「获取花费工时接口」
│   ├── count()「获取花费工时数量接口」
│   ├── store()「创建工时花费」
│   └── update()「更新工时花费」
│
├── version「版本」
│   ├── list()「获取版本接口」
│   ├── count()「获取版本数量接口」
│   ├── store()「创建版本接口」
│   └── update()「更新版本接口」
│
├── workflow「工作流」
│   └── statusMap()「获取工作流状态中英文名对应关系」
│
├─── workspace「公司」
│   ├── addMemberByNick()「添加公司成员到指定项目」
│   ├── users()「获取公司下或者项目下成员」
│   └── projects()「获取公司项目列表」
│
└── wiki「wiki」
    ├── list()「获取wiki接口」
    ├── count()「获取wiki数量接口」
    ├── store()「创建wiki接口」
    └── update()「更新wiki接口」
```

## License

MIT
