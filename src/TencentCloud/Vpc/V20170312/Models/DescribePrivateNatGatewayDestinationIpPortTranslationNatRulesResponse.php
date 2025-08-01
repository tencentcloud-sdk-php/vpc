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
 * DescribePrivateNatGatewayDestinationIpPortTranslationNatRules返回参数结构体
 *
 * @method integer getTotalCount() 获取总规则数目。
 * @method void setTotalCount(integer $TotalCount) 设置总规则数目。
 * @method array getLocalDestinationIpPortTranslationNatRuleSet() 获取目的端口转换规则数组。
 * @method void setLocalDestinationIpPortTranslationNatRuleSet(array $LocalDestinationIpPortTranslationNatRuleSet) 设置目的端口转换规则数组。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePrivateNatGatewayDestinationIpPortTranslationNatRulesResponse extends AbstractModel
{
    /**
     * @var integer 总规则数目。
     */
    public $TotalCount;

    /**
     * @var array 目的端口转换规则数组。
     */
    public $LocalDestinationIpPortTranslationNatRuleSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总规则数目。
     * @param array $LocalDestinationIpPortTranslationNatRuleSet 目的端口转换规则数组。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("LocalDestinationIpPortTranslationNatRuleSet",$param) and $param["LocalDestinationIpPortTranslationNatRuleSet"] !== null) {
            $this->LocalDestinationIpPortTranslationNatRuleSet = [];
            foreach ($param["LocalDestinationIpPortTranslationNatRuleSet"] as $key => $value){
                $obj = new PrivateNatDestinationIpPortTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->LocalDestinationIpPortTranslationNatRuleSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
