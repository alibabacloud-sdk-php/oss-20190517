<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InventoryFilter extends Model
{
    /**
     * @var string
     */
    public $prefix;
    protected $_name = [
        'prefix' => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InventoryFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
