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
 * UnassignIpv6Addresses请求参数结构体
 *
 * @method string getNetworkInterfaceId() 获取弹性网卡实例`ID`，形如：`eni-m6dyj72l`。可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/product/215/15817)接口获取。

 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例`ID`，形如：`eni-m6dyj72l`。可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/product/215/15817)接口获取。

 * @method array getIpv6Addresses() 获取指定的`IPv6`地址列表，单次最多指定10个。
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置指定的`IPv6`地址列表，单次最多指定10个。
 */
class UnassignIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string 弹性网卡实例`ID`，形如：`eni-m6dyj72l`。可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/product/215/15817)接口获取。

     */
    public $NetworkInterfaceId;

    /**
     * @var array 指定的`IPv6`地址列表，单次最多指定10个。
     */
    public $Ipv6Addresses;

    /**
     * @param string $NetworkInterfaceId 弹性网卡实例`ID`，形如：`eni-m6dyj72l`。可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/product/215/15817)接口获取。

     * @param array $Ipv6Addresses 指定的`IPv6`地址列表，单次最多指定10个。
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = [];
            foreach ($param["Ipv6Addresses"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6Addresses, $obj);
            }
        }
    }
}
