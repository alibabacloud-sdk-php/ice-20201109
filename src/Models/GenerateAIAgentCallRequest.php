<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateAIAgentCallRequest\chatSyncConfig;
use AlibabaCloud\Tea\Model;

class GenerateAIAgentCallRequest extends Model
{
    /**
     * @description The ID of the AI agent.
     *
     * This parameter is required.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $AIAgentId;

    /**
     * @var chatSyncConfig
     */
    public $chatSyncConfig;

    /**
     * @description The time when the token expires. Unit: seconds. Default value: 3600. Valid values: 0 to 604800.
     *
     * @example 3600
     *
     * @var int
     */
    public $expire;

    /**
     * @example fw1gr0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The template configurations of the AI agent. The specified configurations are merged with the template configurations that are specified in the console. If you do not specify this parameter, the system uses the default configurations for an AI agent created in the console.
     *
     * @var AIAgentTemplateConfig
     */
    public $templateConfig;

    /**
     * @example {"Email":"johndoe@example.com","Preferences":{"Language":"en"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The username of the AI agent in the channel. If you do not specify this parameter, the system automatically generates a username. The value can be up to 64 characters in length.
     *
     * @example 877ae632caae49b1afc81c2e8194ffb4
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'chatSyncConfig' => 'ChatSyncConfig',
        'expire' => 'Expire',
        'sessionId' => 'SessionId',
        'templateConfig' => 'TemplateConfig',
        'userData' => 'UserData',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }
        if (null !== $this->chatSyncConfig) {
            $res['ChatSyncConfig'] = null !== $this->chatSyncConfig ? $this->chatSyncConfig->toMap() : null;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateAIAgentCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }
        if (isset($map['ChatSyncConfig'])) {
            $model->chatSyncConfig = chatSyncConfig::fromMap($map['ChatSyncConfig']);
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = AIAgentTemplateConfig::fromMap($map['TemplateConfig']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
