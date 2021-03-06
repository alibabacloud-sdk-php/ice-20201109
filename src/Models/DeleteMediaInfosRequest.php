<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteMediaInfosRequest extends Model
{
    /**
     * @description ICE 媒资ID
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description 待注册的媒资在相应系统中的地址
     *
     * @var string
     */
    public $inputURLs;
    protected $_name = [
        'mediaIds'  => 'MediaIds',
        'inputURLs' => 'InputURLs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->inputURLs) {
            $res['InputURLs'] = $this->inputURLs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMediaInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['InputURLs'])) {
            $model->inputURLs = $map['InputURLs'];
        }

        return $model;
    }
}
