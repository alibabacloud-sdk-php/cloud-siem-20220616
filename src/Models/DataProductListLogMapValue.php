<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DataProductListLogMapValue\extraParameters;
use AlibabaCloud\Tea\Model;

class DataProductListLogMapValue extends Model
{
    /**
     * @example cloud_siem_config_log
     *
     * @var string
     */
    public $logCode;

    /**
     * @example audit log
     *
     * @var string
     */
    public $logName;

    /**
     * @example audit log
     *
     * @var string
     */
    public $logNameEn;

    /**
     * @example ${sas.cloudsiem.prod.cloud_siem_aegis_crack_from_beaver}
     *
     * @var string
     */
    public $logNameKey;

    /**
     * @example true
     *
     * @var bool
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $canOperateOrNot;

    /**
     * @example sas_login_event
     *
     * @var string
     */
    public $topic;

    /**
     * @var extraParameters[]
     */
    public $extraParameters;
    protected $_name = [
        'logCode'         => 'LogCode',
        'logName'         => 'LogName',
        'logNameEn'       => 'LogNameEn',
        'logNameKey'      => 'LogNameKey',
        'status'          => 'Status',
        'canOperateOrNot' => 'CanOperateOrNot',
        'topic'           => 'Topic',
        'extraParameters' => 'ExtraParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }
        if (null !== $this->logNameEn) {
            $res['LogNameEn'] = $this->logNameEn;
        }
        if (null !== $this->logNameKey) {
            $res['LogNameKey'] = $this->logNameKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->canOperateOrNot) {
            $res['CanOperateOrNot'] = $this->canOperateOrNot;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->extraParameters) {
            $res['ExtraParameters'] = [];
            if (null !== $this->extraParameters && \is_array($this->extraParameters)) {
                $n = 0;
                foreach ($this->extraParameters as $item) {
                    $res['ExtraParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataProductListLogMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }
        if (isset($map['LogNameEn'])) {
            $model->logNameEn = $map['LogNameEn'];
        }
        if (isset($map['LogNameKey'])) {
            $model->logNameKey = $map['LogNameKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CanOperateOrNot'])) {
            $model->canOperateOrNot = $map['CanOperateOrNot'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['ExtraParameters'])) {
            if (!empty($map['ExtraParameters'])) {
                $model->extraParameters = [];
                $n                      = 0;
                foreach ($map['ExtraParameters'] as $item) {
                    $model->extraParameters[$n++] = null !== $item ? extraParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
