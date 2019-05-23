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

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCFXX'],
            self::TYPE['XBXZXKXX'],
            self::TYPE['XZCFXX'],
            self::TYPE['XZXKXX'],
            self::TYPE['SHOUXHBXX'],
            self::TYPE['SHIXHBXX'],
            self::TYPE['TEST']
        ),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
