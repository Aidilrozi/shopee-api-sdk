<?php

namespace Shopee\Nodes\ApiAuthentication;

use Shopee\Nodes\NodeAbstract;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class ApiAuthentication extends NodeAbstract
{

    public function requestAuthentication($parameters = []): ResponseData
    {
        
        // return $this->post('/api/v1/shop/get', $parameters);
    }

    public function requestShopAuthorization($parameters = [])
    {
        return $this->postAuthorize('/api/v2/shop/auth_partner', $parameters);
    }
}
