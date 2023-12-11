<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataSourceLogRequest extends Model
{
    /**
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example ef33097c9d1fdb0b9c7e8c7ca320pkl1
     *
     * @var string
     */
    public $dataSourceInstanceId;

    /**
     * @example [{"LogCode":"cloud_siem_qcloud_waf_alert_log","LogParas":"[{\"ParaCode\":\"api_name\",\"ParaValue\":\"GetAttackDownloadRecords\"}]"}]
     *
     * @var string
     */
    public $dataSourceInstanceLogs;

    /**
     * @example obs
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example cloud_siem_waf_xxxxx
     *
     * @var string
     */
    public $logCode;

    /**
     * @example ef33097c9d1fdb0b9c7e8c7ca320pkl1
     *
     * @var string
     */
    public $logInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountId'              => 'AccountId',
        'cloudCode'              => 'CloudCode',
        'dataSourceInstanceId'   => 'DataSourceInstanceId',
        'dataSourceInstanceLogs' => 'DataSourceInstanceLogs',
        'dataSourceType'         => 'DataSourceType',
        'logCode'                => 'LogCode',
        'logInstanceId'          => 'LogInstanceId',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->dataSourceInstanceId) {
            $res['DataSourceInstanceId'] = $this->dataSourceInstanceId;
        }
        if (null !== $this->dataSourceInstanceLogs) {
            $res['DataSourceInstanceLogs'] = $this->dataSourceInstanceLogs;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->logInstanceId) {
            $res['LogInstanceId'] = $this->logInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataSourceLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['DataSourceInstanceId'])) {
            $model->dataSourceInstanceId = $map['DataSourceInstanceId'];
        }
        if (isset($map['DataSourceInstanceLogs'])) {
            $model->dataSourceInstanceLogs = $map['DataSourceInstanceLogs'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['LogInstanceId'])) {
            $model->logInstanceId = $map['LogInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}