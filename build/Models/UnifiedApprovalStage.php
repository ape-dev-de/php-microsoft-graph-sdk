<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedApprovalStage
 */
class UnifiedApprovalStage
{
    public function __construct(
        /** The number of days that a request can be pending a response before it is automatically denied. */
        public ?float $approvalStageTimeOutInDays = null,
        /** The escalation approvers for this stage when the primary approvers don't respond. */
        public array $escalationApprovers = [],
        /** The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers. */
        public ?float $escalationTimeInMinutes = null,
        /** Indicates whether the approver must provide justification for their reponse. */
        public ?bool $isApproverJustificationRequired = null,
        /** Indicates whether escalation if enabled. */
        public ?bool $isEscalationEnabled = null,
        /** @var string[] The primary approvers of this stage. */
        public array $primaryApprovers = []
    ) {}
}
