<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetSourceRequest extends Model
{
    /**
     * @description The source location.
     *
     * This parameter is required.
     *
     * @example MySourceLocation
     *
     * @var string
     */
    public $sourceLocationName;

    /**
     * @description The name of the source.
     *
     * This parameter is required.
     *
     * @example MyVodSource
     *
     * @var string
     */
    public $sourceName;

    /**
     * @description The source type. Valid values: vodSource and liveSource.
     *
     * This parameter is required.
     *
     * @example vodSource
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'sourceLocationName' => 'SourceLocationName',
        'sourceName' => 'SourceName',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
