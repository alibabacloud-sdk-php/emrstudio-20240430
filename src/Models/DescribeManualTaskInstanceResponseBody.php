<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class DescribeManualTaskInstanceResponseBody extends Model
{
    /**
     * @example c-b933c5aac7f7***
     *
     * @var string
     */
    public $emrClusterId;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example application_123_***
     *
     * @var string
     */
    public $externalAppId;

    /**
     * @example mti-0k5vype05xm****
     *
     * @var string
     */
    public $manualTaskInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $manualTaskInstanceName;

    /**
     * @example wg-123abc***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $submitTime;

    /**
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $taskType;

    /**
     * @description Id of the request
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'emrClusterId'           => 'EmrClusterId',
        'endTime'                => 'EndTime',
        'externalAppId'          => 'ExternalAppId',
        'manualTaskInstanceId'   => 'ManualTaskInstanceId',
        'manualTaskInstanceName' => 'ManualTaskInstanceName',
        'resourceGroupId'        => 'ResourceGroupId',
        'startTime'              => 'StartTime',
        'status'                 => 'Status',
        'submitTime'             => 'SubmitTime',
        'taskParams'             => 'TaskParams',
        'taskType'               => 'TaskType',
        'requestId'              => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrClusterId) {
            $res['EmrClusterId'] = $this->emrClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->externalAppId) {
            $res['ExternalAppId'] = $this->externalAppId;
        }
        if (null !== $this->manualTaskInstanceId) {
            $res['ManualTaskInstanceId'] = $this->manualTaskInstanceId;
        }
        if (null !== $this->manualTaskInstanceName) {
            $res['ManualTaskInstanceName'] = $this->manualTaskInstanceName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeManualTaskInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrClusterId'])) {
            $model->emrClusterId = $map['EmrClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExternalAppId'])) {
            $model->externalAppId = $map['ExternalAppId'];
        }
        if (isset($map['ManualTaskInstanceId'])) {
            $model->manualTaskInstanceId = $map['ManualTaskInstanceId'];
        }
        if (isset($map['ManualTaskInstanceName'])) {
            $model->manualTaskInstanceName = $map['ManualTaskInstanceName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
