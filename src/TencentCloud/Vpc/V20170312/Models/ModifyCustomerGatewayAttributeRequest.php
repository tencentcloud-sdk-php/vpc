<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomerGatewayAttribute请求参数结构体
 *
 * @method string getCustomerGatewayId() 获取对端网关ID，例如：cgw-2wqq41m9，可通过[DescribeCustomerGateways](https://cloud.tencent.com/document/api/215/17516)接口查询对端网关。
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置对端网关ID，例如：cgw-2wqq41m9，可通过[DescribeCustomerGateways](https://cloud.tencent.com/document/api/215/17516)接口查询对端网关。
 * @method string getCustomerGatewayName() 获取对端网关名称，可任意命名，但不得超过60个字符。
 * @method void setCustomerGatewayName(string $CustomerGatewayName) 设置对端网关名称，可任意命名，但不得超过60个字符。
 * @method integer getBgpAsn() 获取BGP ASN。只有开启BGP白名单才可以修改此参数。
 * @method void setBgpAsn(integer $BgpAsn) 设置BGP ASN。只有开启BGP白名单才可以修改此参数。
 */
class ModifyCustomerGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string 对端网关ID，例如：cgw-2wqq41m9，可通过[DescribeCustomerGateways](https://cloud.tencent.com/document/api/215/17516)接口查询对端网关。
     */
    public $CustomerGatewayId;

    /**
     * @var string 对端网关名称，可任意命名，但不得超过60个字符。
     */
    public $CustomerGatewayName;

    /**
     * @var integer BGP ASN。只有开启BGP白名单才可以修改此参数。
     */
    public $BgpAsn;

    /**
     * @param string $CustomerGatewayId 对端网关ID，例如：cgw-2wqq41m9，可通过[DescribeCustomerGateways](https://cloud.tencent.com/document/api/215/17516)接口查询对端网关。
     * @param string $CustomerGatewayName 对端网关名称，可任意命名，但不得超过60个字符。
     * @param integer $BgpAsn BGP ASN。只有开启BGP白名单才可以修改此参数。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("CustomerGatewayName",$param) and $param["CustomerGatewayName"] !== null) {
            $this->CustomerGatewayName = $param["CustomerGatewayName"];
        }

        if (array_key_exists("BgpAsn",$param) and $param["BgpAsn"] !== null) {
            $this->BgpAsn = $param["BgpAsn"];
        }
    }
}
