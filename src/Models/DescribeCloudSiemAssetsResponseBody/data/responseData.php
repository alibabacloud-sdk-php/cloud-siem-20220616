<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsResponseBody\data;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsResponseBody\data\responseData\assetInfo;
use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @description The UUID of the alert associated with the event.
     *
     * @example sas_71e24437d2797ce8fc59692905a4****
     *
     * @var string
     */
    public $alertUuid;

    /**
     * @description The ID of the Alibaba Cloud account in SIEM.
     *
     * @example 1276085894174392
     *
     * @var int
     */
    public $aliuid;

    /**
     * @description The logical ID of the asset.
     *
     * @example 0616caeb-acb8-45e0-8520-4ee5fbe251f0
     *
     * @var string
     */
    public $assetId;

    /**
     * @description The display information of the asset is in the JSON format.
     *
     * @example [{"KeyName": "${aliyun.siem.asset.asset_name}","Values": "zsw-agentless-ubuntu20","Key": "asset_name"}]
     *
     * @var assetInfo[]
     */
    public $assetInfo;

    /**
     * @description The name of the asset.
     *
     * @example zsw-agentless-centos****
     *
     * @var string
     */
    public $assetName;

    /**
     * @description The type of the asset. Valid values:
     *
     *   ip
     *   domain
     *   url
     *   process
     *   file
     *   host
     *
     * @example domain
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The cloud code of the entity. Valid values:
     *
     *   aliyun: Alibaba Cloud
     *   qcloud: Tencent Cloud
     *   hcloud: Huawei Cloud
     *
     * @example aliyun
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The time when the asset was synchronized.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the asset was last updated.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the asset.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The ID of the associated account to which the asset belongs.
     *
     * @example 176555323***
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'alertUuid'    => 'AlertUuid',
        'aliuid'       => 'Aliuid',
        'assetId'      => 'AssetId',
        'assetInfo'    => 'AssetInfo',
        'assetName'    => 'AssetName',
        'assetType'    => 'AssetType',
        'cloudCode'    => 'CloudCode',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'incidentUuid' => 'IncidentUuid',
        'subUserId'    => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->assetInfo) {
            $res['AssetInfo'] = [];
            if (null !== $this->assetInfo && \is_array($this->assetInfo)) {
                $n = 0;
                foreach ($this->assetInfo as $item) {
                    $res['AssetInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['AssetInfo'])) {
            if (!empty($map['AssetInfo'])) {
                $model->assetInfo = [];
                $n                = 0;
                foreach ($map['AssetInfo'] as $item) {
                    $model->assetInfo[$n++] = null !== $item ? assetInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
