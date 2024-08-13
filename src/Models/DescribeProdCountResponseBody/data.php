<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeProdCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliyunImportedCount;

    /**
     * @description The number of Alibaba Cloud services.
     *
     * @example 19
     *
     * @var int
     */
    public $aliyunProdCount;

    /**
     * @var int
     */
    public $hcloudImportedCount;

    /**
     * @description The number of Huawei Cloud services.
     *
     * @example 2
     *
     * @var int
     */
    public $hcloudProdCount;

    /**
     * @var int
     */
    public $idcImportedCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $idcProdCount;

    /**
     * @var int
     */
    public $qcloudImportedCount;

    /**
     * @description The number of Tencent Cloud services.
     *
     * @example 2
     *
     * @var int
     */
    public $qcloudProdCount;
    protected $_name = [
        'aliyunImportedCount' => 'AliyunImportedCount',
        'aliyunProdCount'     => 'AliyunProdCount',
        'hcloudImportedCount' => 'HcloudImportedCount',
        'hcloudProdCount'     => 'HcloudProdCount',
        'idcImportedCount'    => 'IdcImportedCount',
        'idcProdCount'        => 'IdcProdCount',
        'qcloudImportedCount' => 'QcloudImportedCount',
        'qcloudProdCount'     => 'QcloudProdCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunImportedCount) {
            $res['AliyunImportedCount'] = $this->aliyunImportedCount;
        }
        if (null !== $this->aliyunProdCount) {
            $res['AliyunProdCount'] = $this->aliyunProdCount;
        }
        if (null !== $this->hcloudImportedCount) {
            $res['HcloudImportedCount'] = $this->hcloudImportedCount;
        }
        if (null !== $this->hcloudProdCount) {
            $res['HcloudProdCount'] = $this->hcloudProdCount;
        }
        if (null !== $this->idcImportedCount) {
            $res['IdcImportedCount'] = $this->idcImportedCount;
        }
        if (null !== $this->idcProdCount) {
            $res['IdcProdCount'] = $this->idcProdCount;
        }
        if (null !== $this->qcloudImportedCount) {
            $res['QcloudImportedCount'] = $this->qcloudImportedCount;
        }
        if (null !== $this->qcloudProdCount) {
            $res['QcloudProdCount'] = $this->qcloudProdCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunImportedCount'])) {
            $model->aliyunImportedCount = $map['AliyunImportedCount'];
        }
        if (isset($map['AliyunProdCount'])) {
            $model->aliyunProdCount = $map['AliyunProdCount'];
        }
        if (isset($map['HcloudImportedCount'])) {
            $model->hcloudImportedCount = $map['HcloudImportedCount'];
        }
        if (isset($map['HcloudProdCount'])) {
            $model->hcloudProdCount = $map['HcloudProdCount'];
        }
        if (isset($map['IdcImportedCount'])) {
            $model->idcImportedCount = $map['IdcImportedCount'];
        }
        if (isset($map['IdcProdCount'])) {
            $model->idcProdCount = $map['IdcProdCount'];
        }
        if (isset($map['QcloudImportedCount'])) {
            $model->qcloudImportedCount = $map['QcloudImportedCount'];
        }
        if (isset($map['QcloudProdCount'])) {
            $model->qcloudProdCount = $map['QcloudProdCount'];
        }

        return $model;
    }
}
