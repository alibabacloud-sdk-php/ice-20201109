<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitDelogoJobRequest extends Model
{
    /**
     * @description 输入文件
     *
     * @var string
     */
    public $inputFile;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @description 输出bucket
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @description 输入文件类型
     *
     * @var string
     */
    public $inputType;

    /**
     * @description 是否强制覆盖现有OSS文件
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description 输出类型
     *
     * @var string
     */
    public $outputMediaTarget;
    protected $_name = [
        'inputFile'         => 'InputFile',
        'userData'          => 'UserData',
        'title'             => 'Title',
        'description'       => 'Description',
        'outputConfig'      => 'OutputConfig',
        'inputType'         => 'InputType',
        'overwrite'         => 'Overwrite',
        'outputMediaTarget' => 'OutputMediaTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputFile) {
            $res['InputFile'] = $this->inputFile;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->inputType) {
            $res['InputType'] = $this->inputType;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->outputMediaTarget) {
            $res['OutputMediaTarget'] = $this->outputMediaTarget;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDelogoJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputFile'])) {
            $model->inputFile = $map['InputFile'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['InputType'])) {
            $model->inputType = $map['InputType'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['OutputMediaTarget'])) {
            $model->outputMediaTarget = $map['OutputMediaTarget'];
        }

        return $model;
    }
}
