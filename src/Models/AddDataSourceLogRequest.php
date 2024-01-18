<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class AddDataSourceLogRequest extends Model
{
    /**
     * @description The ID of the cloud account.
     *
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The code of the cloud service provider. Valid values:
     *
     *   qcloud: Tencent Cloud
     *   aliyun: Alibaba Cloud
     *   hcloud: Huawei Cloud
     *
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The ID of the data source. The ID is an MD5 hash value that is calculated by the threat analysis feature based on specific parameters. You can call the [ListDataSourceLogs](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854\&activeTabKey=api%7CListDataSourceLogs) operation to query the IDs of data sources.
     *
     * @example 220ba97c9d1fdb0b9c7e8c7ca328d7ea
     *
     * @var string
     */
    public $dataSourceInstanceId;

    /**
     * @description The parameters of the data source. Set this parameter to a JSON array.
     *
     * @example [{"LogCode":"cloud_siem_qcloud_waf_alert_log","LogParas":"[{\"ParaCode\":\"api_name\",\"ParaValue\":\"GetAttackDownloadRecords\"}]"}]
     *
     * @var string
     */
    public $dataSourceInstanceLogs;

    /**
     * @description The log code.
     *
     * @example cloud_siem_waf_xxxxx
     *
     * @var string
     */
    public $logCode;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
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
        'logCode'                => 'LogCode',
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
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDataSourceLogRequest
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
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
