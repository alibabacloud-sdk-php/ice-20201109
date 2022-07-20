<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\transcode\overwriteParams;

use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @var string
     */
    public $abrMax;

    /**
     * @description 视频平均码率。
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description 缓冲区大小
     *
     * @var string
     */
    public $bufsize;

    /**
     * @description 编码格式
     *
     * @var string
     */
    public $codec;

    /**
     * @description 码率-质量控制因子。
     *
     * @var string
     */
    public $crf;

    /**
     * @description 视频画面裁切
     *
     * @var string
     */
    public $crop;

    /**
     * @description 帧率。
     *
     * @var string
     */
    public $fps;

    /**
     * @description 关键帧间最大帧数。
     *
     * @var string
     */
    public $gop;

    /**
     * @description 高。
     *
     * @var string
     */
    public $height;

    /**
     * @description 是否开启横竖屏自适应（即：长短边模式）
     *
     * @var string
     */
    public $longShortMode;

    /**
     * @description 视频码率峰值
     *
     * @var string
     */
    public $maxrate;

    /**
     * @description 视频贴黑边
     *
     * @var string
     */
    public $pad;

    /**
     * @description 视频颜色格式。
     *
     * @var string
     */
    public $pixFmt;

    /**
     * @description 只有H264支持该参数
     *
     * @var string
     */
    public $preset;

    /**
     * @description 编码级别。
     *
     * @var string
     */
    public $profile;

    /**
     * @description 是否去掉视频
     *
     * @var string
     */
    public $remove;

    /**
     * @description 扫描模式。
     *
     * @var string
     */
    public $scanMode;

    /**
     * @description 宽。
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'abrMax'        => 'AbrMax',
        'bitrate'       => 'Bitrate',
        'bufsize'       => 'Bufsize',
        'codec'         => 'Codec',
        'crf'           => 'Crf',
        'crop'          => 'Crop',
        'fps'           => 'Fps',
        'gop'           => 'Gop',
        'height'        => 'Height',
        'longShortMode' => 'LongShortMode',
        'maxrate'       => 'Maxrate',
        'pad'           => 'Pad',
        'pixFmt'        => 'PixFmt',
        'preset'        => 'Preset',
        'profile'       => 'Profile',
        'remove'        => 'Remove',
        'scanMode'      => 'ScanMode',
        'width'         => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abrMax) {
            $res['AbrMax'] = $this->abrMax;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->bufsize) {
            $res['Bufsize'] = $this->bufsize;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->crf) {
            $res['Crf'] = $this->crf;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->longShortMode) {
            $res['LongShortMode'] = $this->longShortMode;
        }
        if (null !== $this->maxrate) {
            $res['Maxrate'] = $this->maxrate;
        }
        if (null !== $this->pad) {
            $res['Pad'] = $this->pad;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->preset) {
            $res['Preset'] = $this->preset;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->remove) {
            $res['Remove'] = $this->remove;
        }
        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return video
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbrMax'])) {
            $model->abrMax = $map['AbrMax'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Bufsize'])) {
            $model->bufsize = $map['Bufsize'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Crf'])) {
            $model->crf = $map['Crf'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['LongShortMode'])) {
            $model->longShortMode = $map['LongShortMode'];
        }
        if (isset($map['Maxrate'])) {
            $model->maxrate = $map['Maxrate'];
        }
        if (isset($map['Pad'])) {
            $model->pad = $map['Pad'];
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Preset'])) {
            $model->preset = $map['Preset'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Remove'])) {
            $model->remove = $map['Remove'];
        }
        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
