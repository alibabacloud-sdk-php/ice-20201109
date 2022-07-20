<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponseBody\templateContentList;
use AlibabaCloud\Tea\Model;

class ListLiveTranscodeTemplatesResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @var templateContentList[]
     */
    public $templateContentList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'           => 'RequestId',
        'templateContentList' => 'TemplateContentList',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateContentList) {
            $res['TemplateContentList'] = [];
            if (null !== $this->templateContentList && \is_array($this->templateContentList)) {
                $n = 0;
                foreach ($this->templateContentList as $item) {
                    $res['TemplateContentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveTranscodeTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateContentList'])) {
            if (!empty($map['TemplateContentList'])) {
                $model->templateContentList = [];
                $n                          = 0;
                foreach ($map['TemplateContentList'] as $item) {
                    $model->templateContentList[$n++] = null !== $item ? templateContentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
