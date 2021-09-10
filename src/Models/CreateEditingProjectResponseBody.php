<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectResponseBody\project;
use AlibabaCloud\Tea\Model;

class CreateEditingProjectResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @var project
     */
    public $project;
    protected $_name = [
        'requestId' => 'RequestId',
        'project'   => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEditingProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Project'])) {
            $model->project = project::fromMap($map['Project']);
        }

        return $model;
    }
}
