<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestRequirements resources
 *
 * Available select fields:
 * - allowCustomAssignmentSchedule
 * - isApprovalRequiredForAdd
 * - isApprovalRequiredForUpdate
 * - isRequestorJustificationRequired
 * - policyDescription
 * - policyDisplayName
 * - policyId
 * - schedule
 * - questions
 */
class AccessPackageAssignmentRequestRequirementsQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_CUSTOM_ASSIGNMENT_SCHEDULE = 'allowCustomAssignmentSchedule';
    public const FIELD_IS_APPROVAL_REQUIRED_FOR_ADD = 'isApprovalRequiredForAdd';
    public const FIELD_IS_APPROVAL_REQUIRED_FOR_UPDATE = 'isApprovalRequiredForUpdate';
    public const FIELD_IS_REQUESTOR_JUSTIFICATION_REQUIRED = 'isRequestorJustificationRequired';
    public const FIELD_POLICY_DESCRIPTION = 'policyDescription';
    public const FIELD_POLICY_DISPLAY_NAME = 'policyDisplayName';
    public const FIELD_POLICY_ID = 'policyId';
    public const FIELD_SCHEDULE = 'schedule';
    public const FIELD_QUESTIONS = 'questions';

    /**
     * Select specific AccessPackageAssignmentRequestRequirements properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentRequestRequirementsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
