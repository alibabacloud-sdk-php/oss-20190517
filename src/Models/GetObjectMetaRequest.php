<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetObjectMetaRequest extends Model
{
    /**
     * @example CAEQNRiBgIDMh4mD0BYiIDUzNDA4OGNmZjBjYTQ0YmI4Y2I4ZmVlYzJlNGVk****
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'versionId' => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetObjectMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
