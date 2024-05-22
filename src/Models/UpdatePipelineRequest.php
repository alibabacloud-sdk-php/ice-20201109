<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdatePipelineRequest extends Model
{
    /**
     * @example test-pipeline
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example ****d80e4e4044975745c14b****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example 6
     *
     * @var int
     */
    public $priority;

    /**
     * @example Paused
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'name'       => 'Name',
        'pipelineId' => 'PipelineId',
        'priority'   => 'Priority',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
