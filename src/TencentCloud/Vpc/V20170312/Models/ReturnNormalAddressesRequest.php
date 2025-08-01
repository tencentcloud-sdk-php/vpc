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
 * ReturnNormalAddresses请求参数结构体
 *
 * @method array getAddressIps() 获取普通公网IP 的 IP 地址，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressIps。
 * @method void setAddressIps(array $AddressIps) 设置普通公网IP 的 IP 地址，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressIps。
 */
class ReturnNormalAddressesRequest extends AbstractModel
{
    /**
     * @var array 普通公网IP 的 IP 地址，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressIps。
     */
    public $AddressIps;

    /**
     * @param array $AddressIps 普通公网IP 的 IP 地址，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressIps。
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
        if (array_key_exists("AddressIps",$param) and $param["AddressIps"] !== null) {
            $this->AddressIps = $param["AddressIps"];
        }
    }
}
