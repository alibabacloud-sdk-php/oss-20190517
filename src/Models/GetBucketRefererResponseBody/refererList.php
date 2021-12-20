<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketRefererResponseBody;

use AlibabaCloud\Tea\Model;

class refererList extends Model
{
    /**
     * @var string[]
     */
    public $referer;
    protected $_name = [
        'referer' => 'Referer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->referer) {
            $res['Referer'] = $this->referer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refererList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Referer'])) {
            if (!empty($map['Referer'])) {
                $model->referer = $map['Referer'];
            }
        }

        return $model;
    }
}
