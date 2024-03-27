<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody\data;

use AlibabaCloud\Tea\Model;

class supportOperators extends Model
{
    /**
     * @description Indicates whether the right operand is required. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $hasRightValue;

    /**
     * @description The position of the operator in the operator list.
     *
     * @example 3
     *
     * @var int
     */
    public $index;

    /**
     * @description The operator.
     *
     * @example <=
     *
     * @var string
     */
    public $operator;

    /**
     * @description The description of the operator in Chinese.
     *
     * @example larger than or equal to
     *
     * @var string
     */
    public $operatorDescCn;

    /**
     * @description The description of the operator in English.
     *
     * @example larger than or equal to
     *
     * @var string
     */
    public $operatorDescEn;

    /**
     * @description The name of the operator.
     *
     * @example <=
     *
     * @var string
     */
    public $operatorName;

    /**
     * @description The data types that are supported by the operator. The data types are separated by commas (,).
     *
     * @example varchar
     *
     * @var string
     */
    public $supportDataType;

    /**
     * @description The scenarios that are supported by the operator. Multiple scenarios are separated by commas (,), such as aggregation scenarios. By default, this parameter is empty.
     *
     * @example [AGGREGATE]
     *
     * @var string[]
     */
    public $supportTag;
    protected $_name = [
        'hasRightValue'   => 'HasRightValue',
        'index'           => 'Index',
        'operator'        => 'Operator',
        'operatorDescCn'  => 'OperatorDescCn',
        'operatorDescEn'  => 'OperatorDescEn',
        'operatorName'    => 'OperatorName',
        'supportDataType' => 'SupportDataType',
        'supportTag'      => 'SupportTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasRightValue) {
            $res['HasRightValue'] = $this->hasRightValue;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->operatorDescCn) {
            $res['OperatorDescCn'] = $this->operatorDescCn;
        }
        if (null !== $this->operatorDescEn) {
            $res['OperatorDescEn'] = $this->operatorDescEn;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->supportDataType) {
            $res['SupportDataType'] = $this->supportDataType;
        }
        if (null !== $this->supportTag) {
            $res['SupportTag'] = $this->supportTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportOperators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasRightValue'])) {
            $model->hasRightValue = $map['HasRightValue'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OperatorDescCn'])) {
            $model->operatorDescCn = $map['OperatorDescCn'];
        }
        if (isset($map['OperatorDescEn'])) {
            $model->operatorDescEn = $map['OperatorDescEn'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['SupportDataType'])) {
            $model->supportDataType = $map['SupportDataType'];
        }
        if (isset($map['SupportTag'])) {
            if (!empty($map['SupportTag'])) {
                $model->supportTag = $map['SupportTag'];
            }
        }

        return $model;
    }
}
