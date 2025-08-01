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
 * DescribeIp6Translators返回参数结构体
 *
 * @method integer getTotalCount() 获取符合过滤条件的IPV6转换实例数量。
 * @method void setTotalCount(integer $TotalCount) 设置符合过滤条件的IPV6转换实例数量。
 * @method array getIp6TranslatorSet() 获取符合过滤条件的IPV6转换实例详细信息
 * @method void setIp6TranslatorSet(array $Ip6TranslatorSet) 设置符合过滤条件的IPV6转换实例详细信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIp6TranslatorsResponse extends AbstractModel
{
    /**
     * @var integer 符合过滤条件的IPV6转换实例数量。
     */
    public $TotalCount;

    /**
     * @var array 符合过滤条件的IPV6转换实例详细信息
     */
    public $Ip6TranslatorSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合过滤条件的IPV6转换实例数量。
     * @param array $Ip6TranslatorSet 符合过滤条件的IPV6转换实例详细信息
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

        if (array_key_exists("Ip6TranslatorSet",$param) and $param["Ip6TranslatorSet"] !== null) {
            $this->Ip6TranslatorSet = [];
            foreach ($param["Ip6TranslatorSet"] as $key => $value){
                $obj = new Ip6Translator();
                $obj->deserialize($value);
                array_push($this->Ip6TranslatorSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
