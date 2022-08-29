<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobRequest\scheduleConfig;
use AlibabaCloud\Tea\Model;

class SubmitSmarttagJobRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentAddr;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $params;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'content'        => 'Content',
        'contentAddr'    => 'ContentAddr',
        'contentType'    => 'ContentType',
        'input'          => 'Input',
        'notifyUrl'      => 'NotifyUrl',
        'params'         => 'Params',
        'scheduleConfig' => 'ScheduleConfig',
        'templateId'     => 'TemplateId',
        'title'          => 'Title',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentAddr) {
            $res['ContentAddr'] = $this->contentAddr;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSmarttagJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentAddr'])) {
            $model->contentAddr = $map['ContentAddr'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
