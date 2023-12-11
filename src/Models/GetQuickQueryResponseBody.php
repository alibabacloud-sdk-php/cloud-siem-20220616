<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class GetQuickQueryResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The query statement.
     *
     * @example status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5
     *
     * @var string
     */
    public $data;

    /**
     * @description The dynamic error code.
     *
     * @example DeleteJobConfigError
     *
     * @var string
     */
    public $dyCode;

    /**
     * @description The dynamic message.
     *
     * @example Task[%s] is submitting, please try it later
     *
     * @var string
     */
    public $dyMessage;

    /**
     * @description The error code.
     *
     * @example Siem.Delivery.ErrorMapping
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 27D27DCB-D76B-5064-8B3B-0900DEF7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'dyCode'    => 'DyCode',
        'dyMessage' => 'DyMessage',
        'errCode'   => 'ErrCode',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dyCode) {
            $res['DyCode'] = $this->dyCode;
        }
        if (null !== $this->dyMessage) {
            $res['DyMessage'] = $this->dyMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuickQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DyCode'])) {
            $model->dyCode = $map['DyCode'];
        }
        if (isset($map['DyMessage'])) {
            $model->dyMessage = $map['DyMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
