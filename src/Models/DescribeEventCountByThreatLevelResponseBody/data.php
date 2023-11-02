<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventCountByThreatLevelResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $eventNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $highLevelEventNum;

    /**
     * @example 52
     *
     * @var int
     */
    public $lowLevelEventNum;

    /**
     * @example 3
     *
     * @var int
     */
    public $mediumLevelEventNum;

    /**
     * @example 75
     *
     * @var int
     */
    public $undealEventNum;
    protected $_name = [
        'eventNum'            => 'EventNum',
        'highLevelEventNum'   => 'HighLevelEventNum',
        'lowLevelEventNum'    => 'LowLevelEventNum',
        'mediumLevelEventNum' => 'MediumLevelEventNum',
        'undealEventNum'      => 'UndealEventNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventNum) {
            $res['EventNum'] = $this->eventNum;
        }
        if (null !== $this->highLevelEventNum) {
            $res['HighLevelEventNum'] = $this->highLevelEventNum;
        }
        if (null !== $this->lowLevelEventNum) {
            $res['LowLevelEventNum'] = $this->lowLevelEventNum;
        }
        if (null !== $this->mediumLevelEventNum) {
            $res['MediumLevelEventNum'] = $this->mediumLevelEventNum;
        }
        if (null !== $this->undealEventNum) {
            $res['UndealEventNum'] = $this->undealEventNum;
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
        if (isset($map['EventNum'])) {
            $model->eventNum = $map['EventNum'];
        }
        if (isset($map['HighLevelEventNum'])) {
            $model->highLevelEventNum = $map['HighLevelEventNum'];
        }
        if (isset($map['LowLevelEventNum'])) {
            $model->lowLevelEventNum = $map['LowLevelEventNum'];
        }
        if (isset($map['MediumLevelEventNum'])) {
            $model->mediumLevelEventNum = $map['MediumLevelEventNum'];
        }
        if (isset($map['UndealEventNum'])) {
            $model->undealEventNum = $map['UndealEventNum'];
        }

        return $model;
    }
}
