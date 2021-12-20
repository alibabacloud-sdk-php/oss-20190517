<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class UploadPartCopyHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $copySource;

    /**
     * @var string
     */
    public $copySourceIfMatch;

    /**
     * @var string
     */
    public $copySourceIfModifiedSince;

    /**
     * @var string
     */
    public $copySourceIfNoneMatch;

    /**
     * @var string
     */
    public $copySourceIfUnmodifiedSince;

    /**
     * @var string
     */
    public $copySourceRange;
    protected $_name = [
        'copySource'                  => 'x-oss-copy-source',
        'copySourceIfMatch'           => 'x-oss-copy-source-if-match',
        'copySourceIfModifiedSince'   => 'x-oss-copy-source-if-modified-since',
        'copySourceIfNoneMatch'       => 'x-oss-copy-source-if-none-match',
        'copySourceIfUnmodifiedSince' => 'x-oss-copy-source-if-unmodified-since',
        'copySourceRange'             => 'x-oss-copy-source-range',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->copySource) {
            $res['x-oss-copy-source'] = $this->copySource;
        }
        if (null !== $this->copySourceIfMatch) {
            $res['x-oss-copy-source-if-match'] = $this->copySourceIfMatch;
        }
        if (null !== $this->copySourceIfModifiedSince) {
            $res['x-oss-copy-source-if-modified-since'] = $this->copySourceIfModifiedSince;
        }
        if (null !== $this->copySourceIfNoneMatch) {
            $res['x-oss-copy-source-if-none-match'] = $this->copySourceIfNoneMatch;
        }
        if (null !== $this->copySourceIfUnmodifiedSince) {
            $res['x-oss-copy-source-if-unmodified-since'] = $this->copySourceIfUnmodifiedSince;
        }
        if (null !== $this->copySourceRange) {
            $res['x-oss-copy-source-range'] = $this->copySourceRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadPartCopyHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-oss-copy-source'])) {
            $model->copySource = $map['x-oss-copy-source'];
        }
        if (isset($map['x-oss-copy-source-if-match'])) {
            $model->copySourceIfMatch = $map['x-oss-copy-source-if-match'];
        }
        if (isset($map['x-oss-copy-source-if-modified-since'])) {
            $model->copySourceIfModifiedSince = $map['x-oss-copy-source-if-modified-since'];
        }
        if (isset($map['x-oss-copy-source-if-none-match'])) {
            $model->copySourceIfNoneMatch = $map['x-oss-copy-source-if-none-match'];
        }
        if (isset($map['x-oss-copy-source-if-unmodified-since'])) {
            $model->copySourceIfUnmodifiedSince = $map['x-oss-copy-source-if-unmodified-since'];
        }
        if (isset($map['x-oss-copy-source-range'])) {
            $model->copySourceRange = $map['x-oss-copy-source-range'];
        }

        return $model;
    }
}
