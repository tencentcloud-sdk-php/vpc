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
 * DescribeAddressTemplateGroupInstances请求参数结构体
 *
 * @method string getAddressTemplateGroupId() 获取IP地址组实例ID。例如：ipmg-12345678。
 * @method void setAddressTemplateGroupId(string $AddressTemplateGroupId) 设置IP地址组实例ID。例如：ipmg-12345678。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 */
class DescribeAddressTemplateGroupInstancesRequest extends AbstractModel
{
    /**
     * @var string IP地址组实例ID。例如：ipmg-12345678。
     */
    public $AddressTemplateGroupId;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param string $AddressTemplateGroupId IP地址组实例ID。例如：ipmg-12345678。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
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
        if (array_key_exists("AddressTemplateGroupId",$param) and $param["AddressTemplateGroupId"] !== null) {
            $this->AddressTemplateGroupId = $param["AddressTemplateGroupId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
