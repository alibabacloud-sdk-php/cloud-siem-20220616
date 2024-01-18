<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataSourceInstanceParams extends Model
{
    /**
     * @description The code of the parameter.
     *
     * @example region_code
     *
     * @var string
     */
    public $paraCode;

    /**
     * @description The value of the parameter.
     *
     * @example ap-guangzhou
     *
     * @var string
     */
    public $paraValue;
    protected $_name = [
        'paraCode'  => 'ParaCode',
        'paraValue' => 'ParaValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paraCode) {
            $res['ParaCode'] = $this->paraCode;
        }
        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceInstanceParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParaCode'])) {
            $model->paraCode = $map['ParaCode'];
        }
        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }

        return $model;
    }
}
