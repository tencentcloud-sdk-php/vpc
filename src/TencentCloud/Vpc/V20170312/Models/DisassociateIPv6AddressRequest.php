<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DisassociateIPv6Address请求参数结构体
 *
 * @method string getIPv6AddressId() 获取弹性公网IPv6唯一ID，EIPv6 唯一 ID 形如：eipv6-11112222。
 * @method void setIPv6AddressId(string $IPv6AddressId) 设置弹性公网IPv6唯一ID，EIPv6 唯一 ID 形如：eipv6-11112222。
 * @method boolean getKeepBindWithEni() 获取解绑时是否保持绑定弹性网卡。
 * @method void setKeepBindWithEni(boolean $KeepBindWithEni) 设置解绑时是否保持绑定弹性网卡。
 */
class DisassociateIPv6AddressRequest extends AbstractModel
{
    /**
     * @var string 弹性公网IPv6唯一ID，EIPv6 唯一 ID 形如：eipv6-11112222。
     */
    public $IPv6AddressId;

    /**
     * @var boolean 解绑时是否保持绑定弹性网卡。
     */
    public $KeepBindWithEni;

    /**
     * @param string $IPv6AddressId 弹性公网IPv6唯一ID，EIPv6 唯一 ID 形如：eipv6-11112222。
     * @param boolean $KeepBindWithEni 解绑时是否保持绑定弹性网卡。
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
        if (array_key_exists("IPv6AddressId",$param) and $param["IPv6AddressId"] !== null) {
            $this->IPv6AddressId = $param["IPv6AddressId"];
        }

        if (array_key_exists("KeepBindWithEni",$param) and $param["KeepBindWithEni"] !== null) {
            $this->KeepBindWithEni = $param["KeepBindWithEni"];
        }
    }
}