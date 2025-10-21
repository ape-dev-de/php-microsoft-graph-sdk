<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageApprovalStage
 */
class AccessPackageApprovalStage
{
    public function __construct(
        /** The number of days that a request can be pending a response before it is automatically denied. */
        public ?string $durationBeforeAutomaticDenial = null,
        /** If escalation is required, the time a request can be pending a response from a primary approver. */
        public ?string $durationBeforeEscalation = null,
        /** If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests. */
        public array $escalationApprovers = [],
        /** The subjects, typically users, who are the fallback escalation approvers. */
        public array $fallbackEscalationApprovers = [],
        /** The subjects, typically users, who are the fallback primary approvers. */
        public array $fallbackPrimaryApprovers = [],
        /** Indicates whether the approver is required to provide a justification for approving a request. */
        public ?bool $isApproverJustificationRequired = null,
        /** If true, then one or more escalationApprovers are configured in this approval stage. */
        public ?bool $isEscalationEnabled = null,
        /** The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors, externalSponsors, or targetUserSponsors. */
        public array $primaryApprovers = []
    ) {}
}
