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
 * 快照策略关联实例信息
 *
 * @method string getInstanceId() 获取实例Id。
 * @method void setInstanceId(string $InstanceId) 设置实例Id。
 * @method string getInstanceType() 获取实例类型，目前支持安全组：securitygroup。
 * @method void setInstanceType(string $InstanceType) 设置实例类型，目前支持安全组：securitygroup。
 * @method string getInstanceRegion() 获取实例所在地域。
 * @method void setInstanceRegion(string $InstanceRegion) 设置实例所在地域。
 * @method string getSnapshotPolicyId() 获取快照策略Id。
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) 设置快照策略Id。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 */
class SnapshotInstance extends AbstractModel
{
    /**
     * @var string 实例Id。
     */
    public $InstanceId;

    /**
     * @var string 实例类型，目前支持安全组：securitygroup。
     */
    public $InstanceType;

    /**
     * @var string 实例所在地域。
     */
    public $InstanceRegion;

    /**
     * @var string 快照策略Id。
     */
    public $SnapshotPolicyId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @param string $InstanceId 实例Id。
     * @param string $InstanceType 实例类型，目前支持安全组：securitygroup。
     * @param string $InstanceRegion 实例所在地域。
     * @param string $SnapshotPolicyId 快照策略Id。
     * @param string $InstanceName 实例名称。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
