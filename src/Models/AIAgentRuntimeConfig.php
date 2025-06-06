<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentRuntimeConfig\avatarChat3D;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentRuntimeConfig\visionChat;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentRuntimeConfig\voiceChat;

class AIAgentRuntimeConfig extends Model
{
    /**
     * @var string
     */
    public $agentUserId;

    /**
     * @var string
     */
    public $authToken;

    /**
     * @var avatarChat3D
     */
    public $avatarChat3D;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var visionChat
     */
    public $visionChat;

    /**
     * @var voiceChat
     */
    public $voiceChat;
    protected $_name = [
        'agentUserId' => 'AgentUserId',
        'authToken' => 'AuthToken',
        'avatarChat3D' => 'AvatarChat3D',
        'channelId' => 'ChannelId',
        'visionChat' => 'VisionChat',
        'voiceChat' => 'VoiceChat',
    ];

    public function validate()
    {
        if (null !== $this->avatarChat3D) {
            $this->avatarChat3D->validate();
        }
        if (null !== $this->visionChat) {
            $this->visionChat->validate();
        }
        if (null !== $this->voiceChat) {
            $this->voiceChat->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentUserId) {
            $res['AgentUserId'] = $this->agentUserId;
        }

        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }

        if (null !== $this->avatarChat3D) {
            $res['AvatarChat3D'] = null !== $this->avatarChat3D ? $this->avatarChat3D->toArray($noStream) : $this->avatarChat3D;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->visionChat) {
            $res['VisionChat'] = null !== $this->visionChat ? $this->visionChat->toArray($noStream) : $this->visionChat;
        }

        if (null !== $this->voiceChat) {
            $res['VoiceChat'] = null !== $this->voiceChat ? $this->voiceChat->toArray($noStream) : $this->voiceChat;
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
        if (isset($map['AgentUserId'])) {
            $model->agentUserId = $map['AgentUserId'];
        }

        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }

        if (isset($map['AvatarChat3D'])) {
            $model->avatarChat3D = avatarChat3D::fromMap($map['AvatarChat3D']);
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['VisionChat'])) {
            $model->visionChat = visionChat::fromMap($map['VisionChat']);
        }

        if (isset($map['VoiceChat'])) {
            $model->voiceChat = voiceChat::fromMap($map['VoiceChat']);
        }

        return $model;
    }
}
