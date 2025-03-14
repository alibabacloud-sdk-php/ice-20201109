<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateRequest\recordFormat;
use AlibabaCloud\Tea\Model;

class CreateLiveRecordTemplateRequest extends Model
{
    /**
     * @description The name of the template.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description The list of recording formats.
     *
     * This parameter is required.
     *
     * @var recordFormat[]
     */
    public $recordFormat;
    protected $_name = [
        'name' => 'Name',
        'recordFormat' => 'RecordFormat',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recordFormat) {
            $res['RecordFormat'] = [];
            if (null !== $this->recordFormat && \is_array($this->recordFormat)) {
                $n = 0;
                foreach ($this->recordFormat as $item) {
                    $res['RecordFormat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveRecordTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecordFormat'])) {
            if (!empty($map['RecordFormat'])) {
                $model->recordFormat = [];
                $n = 0;
                foreach ($map['RecordFormat'] as $item) {
                    $model->recordFormat[$n++] = null !== $item ? recordFormat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
