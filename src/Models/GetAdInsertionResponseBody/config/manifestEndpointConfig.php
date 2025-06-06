<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAdInsertionResponseBody\config;

use AlibabaCloud\Dara\Model;

class manifestEndpointConfig extends Model
{
    /**
     * @var string
     */
    public $dashPrefix;

    /**
     * @var string
     */
    public $hlsPrefix;
    protected $_name = [
        'dashPrefix' => 'DashPrefix',
        'hlsPrefix' => 'HlsPrefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashPrefix) {
            $res['DashPrefix'] = $this->dashPrefix;
        }

        if (null !== $this->hlsPrefix) {
            $res['HlsPrefix'] = $this->hlsPrefix;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DashPrefix'])) {
            $model->dashPrefix = $map['DashPrefix'];
        }

        if (isset($map['HlsPrefix'])) {
            $model->hlsPrefix = $map['HlsPrefix'];
        }

        return $model;
    }
}
