<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateVodPackagingConfigurationResponseBody extends Model
{
    /**
     * @description The packaging configuration.
     *
     * @var VodPackagingConfiguration
     */
    public $packagingConfiguration;

    /**
     * @description The ID of the request.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'packagingConfiguration' => 'PackagingConfiguration',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->packagingConfiguration) {
            $res['PackagingConfiguration'] = null !== $this->packagingConfiguration ? $this->packagingConfiguration->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVodPackagingConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackagingConfiguration'])) {
            $model->packagingConfiguration = VodPackagingConfiguration::fromMap($map['PackagingConfiguration']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
