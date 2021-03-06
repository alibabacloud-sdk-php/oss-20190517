<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class DeleteBucketReplicationRequest extends Model
{
    /**
     * @var ReplicationRules
     */
    public $body;
    protected $_name = [
        'body' => 'ReplicationRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['ReplicationRules'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBucketReplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReplicationRules'])) {
            $model->body = ReplicationRules::fromMap($map['ReplicationRules']);
        }

        return $model;
    }
}
