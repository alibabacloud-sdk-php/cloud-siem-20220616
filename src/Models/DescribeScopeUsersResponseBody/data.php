<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeScopeUsersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the security information and event management (SIEM) user.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description An array consisting of the domain names that are protected by the WAF instance.
     *
     * @example [123.com, 456.com]
     *
     * @var string[]
     */
    public $domains;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * @example waf-cn-tl123ast****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The username.
     *
     * @example test001
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'aliUid'     => 'AliUid',
        'domains'    => 'Domains',
        'instanceId' => 'InstanceId',
        'userName'   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
