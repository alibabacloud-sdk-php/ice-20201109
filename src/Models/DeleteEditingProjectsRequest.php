<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteEditingProjectsRequest extends Model
{
    /**
     * @description 云剪辑工程ID。支持多个云剪辑工程，以逗号分隔。
     *
     * @var string
     */
    public $projectIds;
    protected $_name = [
        'projectIds' => 'ProjectIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEditingProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectIds'])) {
            $model->projectIds = $map['ProjectIds'];
        }

        return $model;
    }
}
