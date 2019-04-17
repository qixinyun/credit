<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeEnName
{
    const TYPE_ENNAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['XBXZCFXX'] => 'xbxzcfxx',
        IResourceCatalog::TYPE['XBXZXKXX'] => 'xbxzxkxx',
        IResourceCatalog::TYPE['XZCFXX'] => 'xzcfxx',
        IResourceCatalog::TYPE['XZXKXX'] => 'xzxkxx',
        IResourceCatalog::TYPE['SHOUXHBXX'] => 'shouxhbxx',
        IResourceCatalog::TYPE['SHIXHBXX'] => 'shixhbxx',
        IResourceCatalog::TYPE['TEST'] => 'test'
    );
}
