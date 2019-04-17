<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['XBXZCFXX'] => '2019行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXKXX'] => '2019行政许可公示信息',
        IResourceCatalog::TYPE['XZCFXX'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XZXKXX'] => '行政许可公示信息',
        IResourceCatalog::TYPE['SHOUXHBXX'] => '守信红榜信息',
        IResourceCatalog::TYPE['SHIXHBXX'] => '失信黑榜信息',
        IResourceCatalog::TYPE['TEST'] => '测试资源目录',
    );
}
