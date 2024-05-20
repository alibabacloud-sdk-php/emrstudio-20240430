<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class ListManualTasksRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 123abc***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example test
     *
     * @var string
     */
    public $searchVal;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $taskType;

    /**
     * @description This parameter is required.
     *
     * @example 123***
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'maxResults'  => 'maxResults',
        'nextToken'   => 'nextToken',
        'searchVal'   => 'searchVal',
        'taskType'    => 'taskType',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->searchVal) {
            $res['searchVal'] = $this->searchVal;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListManualTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['searchVal'])) {
            $model->searchVal = $map['searchVal'];
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
