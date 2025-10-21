<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestRequirements
 */
class AccessPackageAssignmentRequestRequirements
{
    public function __construct(
        /** Indicates whether the requestor is allowed to set a custom schedule. */
        public ?bool $allowCustomAssignmentSchedule = null,
        /** Indicates whether a request to add must be approved by an approver. */
        public ?bool $isApprovalRequiredForAdd = null,
        /** Indicates whether a request to update must be approved by an approver. */
        public ?bool $isApprovalRequiredForUpdate = null,
        /** Indicates whether requestors must justify requesting access to an access package. */
        public ?bool $isRequestorJustificationRequired = null,
        /** The description of the policy that the user is trying to request access using. */
        public ?string $policyDescription = null,
        /** The display name of the policy that the user is trying to request access using. */
        public ?string $policyDisplayName = null,
        /** The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request. */
        public ?string $policyId = null,
        /** Schedule restrictions enforced, if any. */
        public ?string $schedule = null,
        /**  */
        public array $questions = []
    ) {}
}
