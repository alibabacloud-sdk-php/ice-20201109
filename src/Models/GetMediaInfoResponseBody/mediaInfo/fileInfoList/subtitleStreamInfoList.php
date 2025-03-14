<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\fileInfoList;

use AlibabaCloud\Tea\Model;

class subtitleStreamInfoList extends Model
{
    /**
     * @description The full name of the codec.
     *
     * @example SubRip Text
     *
     * @var string
     */
    public $codecLongName;

    /**
     * @description The short name of the codec.
     *
     * @example srt
     *
     * @var string
     */
    public $codecName;

    /**
     * @description The tag of the codec.
     *
     * @example unicode
     *
     * @var string
     */
    public $codecTag;

    /**
     * @description The tag string of the codec.
     *
     * @example unicode
     *
     * @var string
     */
    public $codecTagString;

    /**
     * @description The time base of the codec.
     *
     * @example 29.97
     *
     * @var string
     */
    public $codecTimeBase;

    /**
     * @description The duration.
     *
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description The sequence number of the subtitle track.
     *
     * @example 1
     *
     * @var string
     */
    public $index;

    /**
     * @description The language.
     *
     * @example und
     *
     * @var string
     */
    public $lang;

    /**
     * @description The start time.
     *
     * @example 0
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time base.
     *
     * @example 30
     *
     * @var string
     */
    public $timebase;
    protected $_name = [
        'codecLongName' => 'CodecLongName',
        'codecName' => 'CodecName',
        'codecTag' => 'CodecTag',
        'codecTagString' => 'CodecTagString',
        'codecTimeBase' => 'CodecTimeBase',
        'duration' => 'Duration',
        'index' => 'Index',
        'lang' => 'Lang',
        'startTime' => 'StartTime',
        'timebase' => 'Timebase',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->codecLongName) {
            $res['CodecLongName'] = $this->codecLongName;
        }
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
        }
        if (null !== $this->codecTag) {
            $res['CodecTag'] = $this->codecTag;
        }
        if (null !== $this->codecTagString) {
            $res['CodecTagString'] = $this->codecTagString;
        }
        if (null !== $this->codecTimeBase) {
            $res['CodecTimeBase'] = $this->codecTimeBase;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timebase) {
            $res['Timebase'] = $this->timebase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitleStreamInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodecLongName'])) {
            $model->codecLongName = $map['CodecLongName'];
        }
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
        }
        if (isset($map['CodecTag'])) {
            $model->codecTag = $map['CodecTag'];
        }
        if (isset($map['CodecTagString'])) {
            $model->codecTagString = $map['CodecTagString'];
        }
        if (isset($map['CodecTimeBase'])) {
            $model->codecTimeBase = $map['CodecTimeBase'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Timebase'])) {
            $model->timebase = $map['Timebase'];
        }

        return $model;
    }
}
