<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListObjectVersionsRequest extends Model
{
    /**
     * @description The character used to group objects by name
     *
     * @var string
     */
    public $delimiter;

    /**
     * @description The encoding type of the object name in the response
     *
     * @var string
     */
    public $encodingType;

    /**
     * @description The name of the object from which the list operation begins
     *
     * @var string
     */
    public $keyMarker;

    /**
     * @description The maximum number of objects to return
     *
     * @var int
     */
    public $maxKeys;

    /**
     * @description The prefix that the returned object names must contain
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The version id of the object from which the list operation begins
     *
     * @var string
     */
    public $versionIdMarker;
    protected $_name = [
        'delimiter'       => 'delimiter',
        'encodingType'    => 'encoding-type',
        'keyMarker'       => 'key-marker',
        'maxKeys'         => 'max-keys',
        'prefix'          => 'prefix',
        'versionIdMarker' => 'version-id-marker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delimiter) {
            $res['delimiter'] = $this->delimiter;
        }
        if (null !== $this->encodingType) {
            $res['encoding-type'] = $this->encodingType;
        }
        if (null !== $this->keyMarker) {
            $res['key-marker'] = $this->keyMarker;
        }
        if (null !== $this->maxKeys) {
            $res['max-keys'] = $this->maxKeys;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->versionIdMarker) {
            $res['version-id-marker'] = $this->versionIdMarker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListObjectVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['delimiter'])) {
            $model->delimiter = $map['delimiter'];
        }
        if (isset($map['encoding-type'])) {
            $model->encodingType = $map['encoding-type'];
        }
        if (isset($map['key-marker'])) {
            $model->keyMarker = $map['key-marker'];
        }
        if (isset($map['max-keys'])) {
            $model->maxKeys = $map['max-keys'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['version-id-marker'])) {
            $model->versionIdMarker = $map['version-id-marker'];
        }

        return $model;
    }
}
