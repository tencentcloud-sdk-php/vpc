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
 * ModifyAddressTemplateAttribute请求参数结构体
 *
 * @method string getAddressTemplateId() 获取IP地址模板实例ID，例如：ipm-mdunqeb6。
 * @method void setAddressTemplateId(string $AddressTemplateId) 设置IP地址模板实例ID，例如：ipm-mdunqeb6。
 * @method string getAddressTemplateName() 获取IP地址模板名称。
 * @method void setAddressTemplateName(string $AddressTemplateName) 设置IP地址模板名称。
 * @method array getAddresses() 获取地址信息，支持 IP、CIDR、IP 范围。
 * @method void setAddresses(array $Addresses) 设置地址信息，支持 IP、CIDR、IP 范围。
 * @method array getAddressesExtra() 获取支持添加备注的地址信息，支持 IP、CIDR、IP 范围。
 * @method void setAddressesExtra(array $AddressesExtra) 设置支持添加备注的地址信息，支持 IP、CIDR、IP 范围。
 */
class ModifyAddressTemplateAttributeRequest extends AbstractModel
{
    /**
     * @var string IP地址模板实例ID，例如：ipm-mdunqeb6。
     */
    public $AddressTemplateId;

    /**
     * @var string IP地址模板名称。
     */
    public $AddressTemplateName;

    /**
     * @var array 地址信息，支持 IP、CIDR、IP 范围。
     */
    public $Addresses;

    /**
     * @var array 支持添加备注的地址信息，支持 IP、CIDR、IP 范围。
     */
    public $AddressesExtra;

    /**
     * @param string $AddressTemplateId IP地址模板实例ID，例如：ipm-mdunqeb6。
     * @param string $AddressTemplateName IP地址模板名称。
     * @param array $Addresses 地址信息，支持 IP、CIDR、IP 范围。
     * @param array $AddressesExtra 支持添加备注的地址信息，支持 IP、CIDR、IP 范围。
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
        if (array_key_exists("AddressTemplateId",$param) and $param["AddressTemplateId"] !== null) {
            $this->AddressTemplateId = $param["AddressTemplateId"];
        }

        if (array_key_exists("AddressTemplateName",$param) and $param["AddressTemplateName"] !== null) {
            $this->AddressTemplateName = $param["AddressTemplateName"];
        }

        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = $param["Addresses"];
        }

        if (array_key_exists("AddressesExtra",$param) and $param["AddressesExtra"] !== null) {
            $this->AddressesExtra = [];
            foreach ($param["AddressesExtra"] as $key => $value){
                $obj = new AddressInfo();
                $obj->deserialize($value);
                array_push($this->AddressesExtra, $obj);
            }
        }
    }
}
