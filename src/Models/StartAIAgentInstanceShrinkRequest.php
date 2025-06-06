<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class StartAIAgentInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $AIAgentId;

    /**
     * @var string
     */
    public $agentConfigShrink;

    /**
     * @var string
     */
    public $chatSyncConfigShrink;

    /**
     * @var string
     */
    public $runtimeConfigShrink;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $templateConfigShrink;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'agentConfigShrink' => 'AgentConfig',
        'chatSyncConfigShrink' => 'ChatSyncConfig',
        'runtimeConfigShrink' => 'RuntimeConfig',
        'sessionId' => 'SessionId',
        'templateConfigShrink' => 'TemplateConfig',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }

        if (null !== $this->agentConfigShrink) {
            $res['AgentConfig'] = $this->agentConfigShrink;
        }

        if (null !== $this->chatSyncConfigShrink) {
            $res['ChatSyncConfig'] = $this->chatSyncConfigShrink;
        }

        if (null !== $this->runtimeConfigShrink) {
            $res['RuntimeConfig'] = $this->runtimeConfigShrink;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->templateConfigShrink) {
            $res['TemplateConfig'] = $this->templateConfigShrink;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }

        if (isset($map['AgentConfig'])) {
            $model->agentConfigShrink = $map['AgentConfig'];
        }

        if (isset($map['ChatSyncConfig'])) {
            $model->chatSyncConfigShrink = $map['ChatSyncConfig'];
        }

        if (isset($map['RuntimeConfig'])) {
            $model->runtimeConfigShrink = $map['RuntimeConfig'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TemplateConfig'])) {
            $model->templateConfigShrink = $map['TemplateConfig'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
