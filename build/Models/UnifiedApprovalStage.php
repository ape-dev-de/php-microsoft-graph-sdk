<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedApprovalStage
 */
class UnifiedApprovalStage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The number of days that a request can be pending a response before it is automatically denied. */
    public ?float $approvalStageTimeOutInDays = null;

    /** 
     * The escalation approvers for this stage when the primary approvers don't respond.
     * @var SubjectSet[]
     */
    public array $escalationApprovers = [];

    /** The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers. */
    public ?float $escalationTimeInMinutes = null;

    /** Indicates whether the approver must provide justification for their reponse. */
    public ?bool $isApproverJustificationRequired = null;

    /** Indicates whether escalation if enabled. */
    public ?bool $isEscalationEnabled = null;

    /** 
     * The primary approvers of this stage.
     * @var SubjectSet[]
     */
    public array $primaryApprovers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['approvalStageTimeOutInDays'])) {
            $this->approvalStageTimeOutInDays = is_numeric($data['approvalStageTimeOutInDays']) ? (float)$data['approvalStageTimeOutInDays'] : $data['approvalStageTimeOutInDays'];
        }
        if (isset($data['escalationApprovers'])) {
            $this->escalationApprovers = $data['escalationApprovers'];
        }
        if (isset($data['escalationTimeInMinutes'])) {
            $this->escalationTimeInMinutes = is_numeric($data['escalationTimeInMinutes']) ? (float)$data['escalationTimeInMinutes'] : $data['escalationTimeInMinutes'];
        }
        if (isset($data['isApproverJustificationRequired'])) {
            $this->isApproverJustificationRequired = is_bool($data['isApproverJustificationRequired']) ? $data['isApproverJustificationRequired'] : (bool)$data['isApproverJustificationRequired'];
        }
        if (isset($data['isEscalationEnabled'])) {
            $this->isEscalationEnabled = is_bool($data['isEscalationEnabled']) ? $data['isEscalationEnabled'] : (bool)$data['isEscalationEnabled'];
        }
        if (isset($data['primaryApprovers'])) {
            $this->primaryApprovers = $data['primaryApprovers'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
