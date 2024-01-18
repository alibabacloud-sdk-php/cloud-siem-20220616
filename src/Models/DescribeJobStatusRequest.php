<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobStatusRequest extends Model
{
    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The id of collection task.
     *
     * @example xxxxx_folder_xxxxxx
     *
     * @var string
     */
    public $submitId;
    protected $_name = [
        'regionId' => 'RegionId',
        'submitId' => 'SubmitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }

        return $model;
    }
}
