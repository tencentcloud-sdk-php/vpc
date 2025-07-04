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
 * 云联网路由传播策略
 *
 * @method array getRouteConditions() 获取路由条件
 * @method void setRouteConditions(array $RouteConditions) 设置路由条件
 * @method array getBroadcastConditions() 获取传播条件
 * @method void setBroadcastConditions(array $BroadcastConditions) 设置传播条件
 * @method string getAction() 获取路由行为，`accept` 允许，`drop` 拒绝
 * @method void setAction(string $Action) 设置路由行为，`accept` 允许，`drop` 拒绝
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 * @method string getOperateAsPath() 获取as-path操作
 * @method void setOperateAsPath(string $OperateAsPath) 设置as-path操作
 * @method string getAsPathOperateMode() 获取as-path操作模式
 * @method void setAsPathOperateMode(string $AsPathOperateMode) 设置as-path操作模式
 * @method array getOperateCommunitySet() 获取community操作
 * @method void setOperateCommunitySet(array $OperateCommunitySet) 设置community操作
 * @method string getCommunityOperateMode() 获取community操作模式
 * @method void setCommunityOperateMode(string $CommunityOperateMode) 设置community操作模式
 */
class CcnRouteTableBroadcastPolicy extends AbstractModel
{
    /**
     * @var array 路由条件
     */
    public $RouteConditions;

    /**
     * @var array 传播条件
     */
    public $BroadcastConditions;

    /**
     * @var string 路由行为，`accept` 允许，`drop` 拒绝
     */
    public $Action;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @var string as-path操作
     */
    public $OperateAsPath;

    /**
     * @var string as-path操作模式
     */
    public $AsPathOperateMode;

    /**
     * @var array community操作
     */
    public $OperateCommunitySet;

    /**
     * @var string community操作模式
     */
    public $CommunityOperateMode;

    /**
     * @param array $RouteConditions 路由条件
     * @param array $BroadcastConditions 传播条件
     * @param string $Action 路由行为，`accept` 允许，`drop` 拒绝
     * @param string $Description 策略描述
     * @param string $OperateAsPath as-path操作
     * @param string $AsPathOperateMode as-path操作模式
     * @param array $OperateCommunitySet community操作
     * @param string $CommunityOperateMode community操作模式
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
        if (array_key_exists("RouteConditions",$param) and $param["RouteConditions"] !== null) {
            $this->RouteConditions = [];
            foreach ($param["RouteConditions"] as $key => $value){
                $obj = new CcnRouteBroadcastPolicyRouteCondition();
                $obj->deserialize($value);
                array_push($this->RouteConditions, $obj);
            }
        }

        if (array_key_exists("BroadcastConditions",$param) and $param["BroadcastConditions"] !== null) {
            $this->BroadcastConditions = [];
            foreach ($param["BroadcastConditions"] as $key => $value){
                $obj = new CcnRouteBroadcastPolicyRouteCondition();
                $obj->deserialize($value);
                array_push($this->BroadcastConditions, $obj);
            }
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OperateAsPath",$param) and $param["OperateAsPath"] !== null) {
            $this->OperateAsPath = $param["OperateAsPath"];
        }

        if (array_key_exists("AsPathOperateMode",$param) and $param["AsPathOperateMode"] !== null) {
            $this->AsPathOperateMode = $param["AsPathOperateMode"];
        }

        if (array_key_exists("OperateCommunitySet",$param) and $param["OperateCommunitySet"] !== null) {
            $this->OperateCommunitySet = $param["OperateCommunitySet"];
        }

        if (array_key_exists("CommunityOperateMode",$param) and $param["CommunityOperateMode"] !== null) {
            $this->CommunityOperateMode = $param["CommunityOperateMode"];
        }
    }
}
