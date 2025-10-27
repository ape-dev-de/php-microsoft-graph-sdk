<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageApprovalStage
 */
class AccessPackageApprovalStage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The number of days that a request can be pending a response before it is automatically denied. */
    public ?string $durationBeforeAutomaticDenial = null;

    /** If escalation is required, the time a request can be pending a response from a primary approver. */
    public ?string $durationBeforeEscalation = null;

    /** 
     * If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
     * @var SubjectSet[]
     */
    public array $escalationApprovers = [];

    /** 
     * The subjects, typically users, who are the fallback escalation approvers.
     * @var SubjectSet[]
     */
    public array $fallbackEscalationApprovers = [];

    /** 
     * The subjects, typically users, who are the fallback primary approvers.
     * @var SubjectSet[]
     */
    public array $fallbackPrimaryApprovers = [];

    /** Indicates whether the approver is required to provide a justification for approving a request. */
    public ?bool $isApproverJustificationRequired = null;

    /** If true, then one or more escalationApprovers are configured in this approval stage. */
    public ?bool $isEscalationEnabled = null;

    /** 
     * The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors, externalSponsors, or targetUserSponsors.
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
        if (isset($data['durationBeforeAutomaticDenial'])) {
            $this->durationBeforeAutomaticDenial = $data['durationBeforeAutomaticDenial'];
        }
        if (isset($data['durationBeforeEscalation'])) {
            $this->durationBeforeEscalation = $data['durationBeforeEscalation'];
        }
        if (isset($data['escalationApprovers'])) {
            $this->escalationApprovers = $data['escalationApprovers'];
        }
        if (isset($data['fallbackEscalationApprovers'])) {
            $this->fallbackEscalationApprovers = $data['fallbackEscalationApprovers'];
        }
        if (isset($data['fallbackPrimaryApprovers'])) {
            $this->fallbackPrimaryApprovers = $data['fallbackPrimaryApprovers'];
        }
        if (isset($data['isApproverJustificationRequired'])) {
            $this->isApproverJustificationRequired = $data['isApproverJustificationRequired'];
        }
        if (isset($data['isEscalationEnabled'])) {
            $this->isEscalationEnabled = $data['isEscalationEnabled'];
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
