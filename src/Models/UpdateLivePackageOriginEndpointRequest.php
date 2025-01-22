<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateLivePackageOriginEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationCode;
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $endpointName;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $ipBlacklist;
    /**
     * @var string
     */
    public $ipWhitelist;
    /**
     * @var string
     */
    public $manifestName;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var int
     */
    public $timeshiftVision;
    protected $_name = [
        'authorizationCode' => 'AuthorizationCode',
        'channelName'       => 'ChannelName',
        'description'       => 'Description',
        'endpointName'      => 'EndpointName',
        'groupName'         => 'GroupName',
        'ipBlacklist'       => 'IpBlacklist',
        'ipWhitelist'       => 'IpWhitelist',
        'manifestName'      => 'ManifestName',
        'protocol'          => 'Protocol',
        'timeshiftVision'   => 'TimeshiftVision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationCode) {
            $res['AuthorizationCode'] = $this->authorizationCode;
        }

        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->ipBlacklist) {
            $res['IpBlacklist'] = $this->ipBlacklist;
        }

        if (null !== $this->ipWhitelist) {
            $res['IpWhitelist'] = $this->ipWhitelist;
        }

        if (null !== $this->manifestName) {
            $res['ManifestName'] = $this->manifestName;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->timeshiftVision) {
            $res['TimeshiftVision'] = $this->timeshiftVision;
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
        if (isset($map['AuthorizationCode'])) {
            $model->authorizationCode = $map['AuthorizationCode'];
        }

        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IpBlacklist'])) {
            $model->ipBlacklist = $map['IpBlacklist'];
        }

        if (isset($map['IpWhitelist'])) {
            $model->ipWhitelist = $map['IpWhitelist'];
        }

        if (isset($map['ManifestName'])) {
            $model->manifestName = $map['ManifestName'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['TimeshiftVision'])) {
            $model->timeshiftVision = $map['TimeshiftVision'];
        }

        return $model;
    }
}