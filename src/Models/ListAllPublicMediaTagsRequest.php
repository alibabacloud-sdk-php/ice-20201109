<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListAllPublicMediaTagsRequest extends Model
{
    /**
     * @description 媒资业务类型
     *
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $entityId;
    protected $_name = [
        'businessType' => 'BusinessType',
        'entityId'     => 'EntityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAllPublicMediaTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
