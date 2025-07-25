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
 * 公网询价出参
 *
 * @method InternetPriceDetail getAddressPrice() 获取公网IP询价详细参数。
 * @method void setAddressPrice(InternetPriceDetail $AddressPrice) 设置公网IP询价详细参数。
 */
class InternetPrice extends AbstractModel
{
    /**
     * @var InternetPriceDetail 公网IP询价详细参数。
     */
    public $AddressPrice;

    /**
     * @param InternetPriceDetail $AddressPrice 公网IP询价详细参数。
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
        if (array_key_exists("AddressPrice",$param) and $param["AddressPrice"] !== null) {
            $this->AddressPrice = new InternetPriceDetail();
            $this->AddressPrice->deserialize($param["AddressPrice"]);
        }
    }
}
