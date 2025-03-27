<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest\videoSettings\videoCodecSetting;

class videoSettings extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $videoCodec;

    /**
     * @var videoCodecSetting
     */
    public $videoCodecSetting;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'name' => 'Name',
        'videoCodec' => 'VideoCodec',
        'videoCodecSetting' => 'VideoCodecSetting',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->videoCodecSetting) {
            $this->videoCodecSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->videoCodec) {
            $res['VideoCodec'] = $this->videoCodec;
        }

        if (null !== $this->videoCodecSetting) {
            $res['VideoCodecSetting'] = null !== $this->videoCodecSetting ? $this->videoCodecSetting->toArray($noStream) : $this->videoCodecSetting;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['VideoCodec'])) {
            $model->videoCodec = $map['VideoCodec'];
        }

        if (isset($map['VideoCodecSetting'])) {
            $model->videoCodecSetting = videoCodecSetting::fromMap($map['VideoCodecSetting']);
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
