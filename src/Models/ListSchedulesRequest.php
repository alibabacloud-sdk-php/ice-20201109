<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListSchedulesRequest extends Model
{
    /**
     * @description The name of the channel.
     *
     * This parameter is required.
     * @example MyChannel
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The time window of the program schedule.
     *
     * This parameter is required.
     * @example 14400
     *
     * @var int
     */
    public $windowDurationSeconds;
    protected $_name = [
        'channelName'           => 'ChannelName',
        'pageNo'                => 'PageNo',
        'pageSize'              => 'PageSize',
        'windowDurationSeconds' => 'WindowDurationSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->windowDurationSeconds) {
            $res['WindowDurationSeconds'] = $this->windowDurationSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSchedulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['WindowDurationSeconds'])) {
            $model->windowDurationSeconds = $map['WindowDurationSeconds'];
        }

        return $model;
    }
}
