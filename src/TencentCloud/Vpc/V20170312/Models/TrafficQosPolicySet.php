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
 * 流量调度规则
 *
 * @method string getCcnId() 获取CCN实例ID。形如：ccn-f49l6u0z。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnId(string $CcnId) 设置CCN实例ID。形如：ccn-f49l6u0z。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQosId() 获取qos id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQosId(integer $QosId) 设置qos id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQosPolicyDescription() 获取描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQosPolicyDescription(string $QosPolicyDescription) 设置描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQosPolicyName() 获取名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQosPolicyName(string $QosPolicyName) 设置名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidth() 获取带宽。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQosPolicyId() 获取流量调度策略ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQosPolicyId(string $QosPolicyId) 设置流量调度策略ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrafficQosPolicySet extends AbstractModel
{
    /**
     * @var string CCN实例ID。形如：ccn-f49l6u0z。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnId;

    /**
     * @var integer qos id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QosId;

    /**
     * @var string 描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QosPolicyDescription;

    /**
     * @var string 名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QosPolicyName;

    /**
     * @var integer 带宽。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var string 流量调度策略ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QosPolicyId;

    /**
     * @param string $CcnId CCN实例ID。形如：ccn-f49l6u0z。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QosId qos id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QosPolicyDescription 描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QosPolicyName 名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bandwidth 带宽。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QosPolicyId 流量调度策略ID。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("QosId",$param) and $param["QosId"] !== null) {
            $this->QosId = $param["QosId"];
        }

        if (array_key_exists("QosPolicyDescription",$param) and $param["QosPolicyDescription"] !== null) {
            $this->QosPolicyDescription = $param["QosPolicyDescription"];
        }

        if (array_key_exists("QosPolicyName",$param) and $param["QosPolicyName"] !== null) {
            $this->QosPolicyName = $param["QosPolicyName"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("QosPolicyId",$param) and $param["QosPolicyId"] !== null) {
            $this->QosPolicyId = $param["QosPolicyId"];
        }
    }
}