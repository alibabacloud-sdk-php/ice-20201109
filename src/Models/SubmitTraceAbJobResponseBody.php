<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceAbJobResponseBody\data;
use AlibabaCloud\Tea\Model;

class SubmitTraceAbJobResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example ******36-3C1E-4417-BDB2-1E034F******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 200
     *
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'data'       => 'Data',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTraceAbJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
