<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListObjectsV2ResponseBody extends Model
{
    /**
     * @var CommonPrefix[]
     */
    public $commonPrefixes;

    /**
     * @var ObjectSummary[]
     */
    public $contents;

    /**
     * @example test1.txt
     *
     * @var string
     */
    public $continuationToken;

    /**
     * @example /
     *
     * @var string
     */
    public $delimiter;

    /**
     * @example url
     *
     * @var string
     */
    public $encodingType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @example 6
     *
     * @var int
     */
    public $keyCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxKeys;

    /**
     * @example oss-example
     *
     * @var string
     */
    public $name;

    /**
     * @example CgJiYw--
     *
     * @var string
     */
    public $nextContinuationToken;

    /**
     * @example a
     *
     * @var string
     */
    public $prefix;

    /**
     * @example b
     *
     * @var string
     */
    public $startAfter;
    protected $_name = [
        'commonPrefixes'        => 'CommonPrefixes',
        'contents'              => 'Contents',
        'continuationToken'     => 'ContinuationToken',
        'delimiter'             => 'Delimiter',
        'encodingType'          => 'EncodingType',
        'isTruncated'           => 'IsTruncated',
        'keyCount'              => 'KeyCount',
        'maxKeys'               => 'MaxKeys',
        'name'                  => 'Name',
        'nextContinuationToken' => 'NextContinuationToken',
        'prefix'                => 'Prefix',
        'startAfter'            => 'StartAfter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonPrefixes) {
            $res['CommonPrefixes'] = [];
            if (null !== $this->commonPrefixes && \is_array($this->commonPrefixes)) {
                $n = 0;
                foreach ($this->commonPrefixes as $item) {
                    $res['CommonPrefixes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contents) {
            $res['Contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['Contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->continuationToken) {
            $res['ContinuationToken'] = $this->continuationToken;
        }
        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
        }
        if (null !== $this->encodingType) {
            $res['EncodingType'] = $this->encodingType;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->keyCount) {
            $res['KeyCount'] = $this->keyCount;
        }
        if (null !== $this->maxKeys) {
            $res['MaxKeys'] = $this->maxKeys;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextContinuationToken) {
            $res['NextContinuationToken'] = $this->nextContinuationToken;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->startAfter) {
            $res['StartAfter'] = $this->startAfter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListObjectsV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonPrefixes'])) {
            if (!empty($map['CommonPrefixes'])) {
                $model->commonPrefixes = [];
                $n                     = 0;
                foreach ($map['CommonPrefixes'] as $item) {
                    $model->commonPrefixes[$n++] = null !== $item ? CommonPrefix::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? ObjectSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContinuationToken'])) {
            $model->continuationToken = $map['ContinuationToken'];
        }
        if (isset($map['Delimiter'])) {
            $model->delimiter = $map['Delimiter'];
        }
        if (isset($map['EncodingType'])) {
            $model->encodingType = $map['EncodingType'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['KeyCount'])) {
            $model->keyCount = $map['KeyCount'];
        }
        if (isset($map['MaxKeys'])) {
            $model->maxKeys = $map['MaxKeys'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextContinuationToken'])) {
            $model->nextContinuationToken = $map['NextContinuationToken'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['StartAfter'])) {
            $model->startAfter = $map['StartAfter'];
        }

        return $model;
    }
}
