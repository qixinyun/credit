<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['XBXZCFXX'] => 'XBXZCFXX',
        IResourceCatalog::TYPE['XBXZXKXX'] => 'XBXZXKXX',
        IResourceCatalog::TYPE['XZCFXX'] => 'XZCFXX',
        IResourceCatalog::TYPE['XZXKXX'] => 'XZXKXX',
        IResourceCatalog::TYPE['SHOUXHBXX'] => 'SHOUXHBXX',
        IResourceCatalog::TYPE['SHIXHBXX'] => 'SHIXHBXX',
        IResourceCatalog::TYPE['TEST'] => 'TEST',
    );
}
