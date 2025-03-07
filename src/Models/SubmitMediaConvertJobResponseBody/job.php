<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaConvertJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputDetail;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputGroupDetail;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaConvertJobResponseBody\job\config;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @description The idempotency key of the request for creating the transcoding task.
     *
     * @example FB7F25E9-AD9B-1603-8AF6-F1E42DF2E706
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The error code returned when the transcoding task failed.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The configurations of the transcoding task.
     *
     * @var config
     */
    public $config;

    /**
     * @description The ID of the transcoding task.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The error message returned when the transcoding task failed.
     *
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @description The details of the transcoded outputs.
     *
     * @var MediaConvertOutputDetail[]
     */
    public $outputDetails;

    /**
     * @description The details of the output groups.
     *
     * @var MediaConvertOutputGroupDetail[]
     */
    public $outputGroupDetails;

    /**
     * @description The ID of the queue.
     *
     * @example 3780049
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The ID of the request.
     *
     * @example A2129C9F-CE95-58B5-B8C1-07758FF6C86F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the transcoding task. Valid values:
     *
     *   Inited: The task is initialized.
     *   Running
     *   Success
     *   Failed
     *   Cancelled
     *
     * @example Created
     *
     * @var string
     */
    public $state;

    /**
     * @description The user data.
     *
     * @example {"videoId":"abcd"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'code'               => 'Code',
        'config'             => 'Config',
        'jobId'              => 'JobId',
        'message'            => 'Message',
        'outputDetails'      => 'OutputDetails',
        'outputGroupDetails' => 'OutputGroupDetails',
        'pipelineId'         => 'PipelineId',
        'requestId'          => 'RequestId',
        'state'              => 'State',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->outputDetails) {
            $res['OutputDetails'] = [];
            if (null !== $this->outputDetails && \is_array($this->outputDetails)) {
                $n = 0;
                foreach ($this->outputDetails as $item) {
                    $res['OutputDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputGroupDetails) {
            $res['OutputGroupDetails'] = [];
            if (null !== $this->outputGroupDetails && \is_array($this->outputGroupDetails)) {
                $n = 0;
                foreach ($this->outputGroupDetails as $item) {
                    $res['OutputGroupDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OutputDetails'])) {
            if (!empty($map['OutputDetails'])) {
                $model->outputDetails = [];
                $n                    = 0;
                foreach ($map['OutputDetails'] as $item) {
                    $model->outputDetails[$n++] = null !== $item ? MediaConvertOutputDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputGroupDetails'])) {
            if (!empty($map['OutputGroupDetails'])) {
                $model->outputGroupDetails = [];
                $n                         = 0;
                foreach ($map['OutputGroupDetails'] as $item) {
                    $model->outputGroupDetails[$n++] = null !== $item ? MediaConvertOutputGroupDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
