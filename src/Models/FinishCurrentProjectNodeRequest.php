<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class FinishCurrentProjectNodeRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $nodeId;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $templateForm;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'nodeId'       => 'NodeId',
        'remark'       => 'Remark',
        'templateForm' => 'TemplateForm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->templateForm) {
            $res['TemplateForm'] = $this->templateForm;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['TemplateForm'])) {
            $model->templateForm = $map['TemplateForm'];
        }

        return $model;
    }
}
