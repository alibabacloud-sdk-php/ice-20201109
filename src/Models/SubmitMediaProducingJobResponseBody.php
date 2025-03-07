<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaProducingJobResponseBody extends Model
{
    /**
     * @description The job ID.
     *
     * @example ****d80e4e4044975745c14b****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The media asset ID of the output file.
     *
     * @example ****c469e944b5a856828dc2****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The ID of the editing project.
     *
     * @example ****b4549d46c88681030f6e****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The request ID.
     *
     * @example ****36-3C1E-4417-BDB2-1E034F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The media asset ID of the output file in ApsaraVideo VOD if the output file is stored in ApsaraVideo VOD.
     *
     * @example ****d8s4h75ci975745c14b****
     *
     * @var string
     */
    public $vodMediaId;
    protected $_name = [
        'jobId'      => 'JobId',
        'mediaId'    => 'MediaId',
        'projectId'  => 'ProjectId',
        'requestId'  => 'RequestId',
        'vodMediaId' => 'VodMediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vodMediaId) {
            $res['VodMediaId'] = $this->vodMediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaProducingJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VodMediaId'])) {
            $model->vodMediaId = $map['VodMediaId'];
        }

        return $model;
    }
}
