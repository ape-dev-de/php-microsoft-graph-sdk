<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentApprovalSettings resources
 *
 * Available select fields:
 * - isApprovalRequiredForAdd
 * - isApprovalRequiredForUpdate
 * - isRequestorJustificationRequired
 * - stages
 */
class AccessPackageAssignmentApprovalSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_APPROVAL_REQUIRED_FOR_ADD = 'isApprovalRequiredForAdd';
    public const FIELD_IS_APPROVAL_REQUIRED_FOR_UPDATE = 'isApprovalRequiredForUpdate';
    public const FIELD_IS_REQUESTOR_JUSTIFICATION_REQUIRED = 'isRequestorJustificationRequired';
    public const FIELD_STAGES = 'stages';

    /**
     * Select specific AccessPackageAssignmentApprovalSettings properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentApprovalSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
