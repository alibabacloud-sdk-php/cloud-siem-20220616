<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneByEventResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneByEventResponseBody\data\targets;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The alert name. The display name of the alert name varies based on the language of the system, such as Chinese and English.
     *
     * @example login_common_ip
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The ID of the alert name.
     *
     * @example login_common_ip
     *
     * @var string
     */
    public $alertNameId;

    /**
     * @description The alert title. The display name of the alert title varies based on the language of the system, such as Chinese and English.
     *
     * @example Unusual Logon-login_common_ip
     *
     * @var string
     */
    public $alertTile;

    /**
     * @description The ID of the alert title.
     *
     * @example Unusual Logon-login_common_ip
     *
     * @var string
     */
    public $alertTileId;

    /**
     * @description The alert type. The display name of the alert type varies based on the language of the system, such as Chinese and English.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The ID of the alert type.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $alertTypeId;

    /**
     * @description The objects that can be added to the whitelist.
     *
     * @example [{"Type": "host_uuid","Value": "441862da-a539-4cc0-a00d-473955826881","Values": ["441862da-a539-4cc0-a00d-473955826881"],"Name": "${aliyun.siem.entity.host_uuid}"}]
     *
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'alertName'   => 'AlertName',
        'alertNameId' => 'AlertNameId',
        'alertTile'   => 'AlertTile',
        'alertTileId' => 'AlertTileId',
        'alertType'   => 'AlertType',
        'alertTypeId' => 'AlertTypeId',
        'targets'     => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->alertNameId) {
            $res['AlertNameId'] = $this->alertNameId;
        }
        if (null !== $this->alertTile) {
            $res['AlertTile'] = $this->alertTile;
        }
        if (null !== $this->alertTileId) {
            $res['AlertTileId'] = $this->alertTileId;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->alertTypeId) {
            $res['AlertTypeId'] = $this->alertTypeId;
        }
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['AlertNameId'])) {
            $model->alertNameId = $map['AlertNameId'];
        }
        if (isset($map['AlertTile'])) {
            $model->alertTile = $map['AlertTile'];
        }
        if (isset($map['AlertTileId'])) {
            $model->alertTileId = $map['AlertTileId'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AlertTypeId'])) {
            $model->alertTypeId = $map['AlertTypeId'];
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
