<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{

    const TYPE = array(
        'NULL' => 0,
        'XBXZCFXX' => 1,
        'XBXZXKXX' => 2,
        'XZCFXX' => 3,
        'XZXKXX' => 4,
        'SHOUXHBXX' => 5,
        'SHIXHBXX' => 6,
        'TEST' => 500
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
