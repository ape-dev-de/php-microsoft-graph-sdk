<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApprovalSettings resources
 *
 * Available select fields:
 * - approvalMode
 * - approvalStages
 * - isApprovalRequired
 * - isApprovalRequiredForExtension
 * - isRequestorJustificationRequired
 */
class ApprovalSettingsQueryOptions extends QueryOptions
{
    public const FIELD_APPROVAL_MODE = 'approvalMode';
    public const FIELD_APPROVAL_STAGES = 'approvalStages';
    public const FIELD_IS_APPROVAL_REQUIRED = 'isApprovalRequired';
    public const FIELD_IS_APPROVAL_REQUIRED_FOR_EXTENSION = 'isApprovalRequiredForExtension';
    public const FIELD_IS_REQUESTOR_JUSTIFICATION_REQUIRED = 'isRequestorJustificationRequired';

    /**
     * Select specific ApprovalSettings properties
     * 
     * @param array<string> $select Use ApprovalSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
