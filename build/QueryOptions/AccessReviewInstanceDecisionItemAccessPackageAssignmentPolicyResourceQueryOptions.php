<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource resources
 *
 * Available select fields:
 * - accessPackageDisplayName
 * - accessPackageId
 */
class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResourceQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_PACKAGE_DISPLAY_NAME = 'accessPackageDisplayName';
    public const FIELD_ACCESS_PACKAGE_ID = 'accessPackageId';

    /**
     * Select specific AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource properties
     * 
     * @param array<string> $select Use AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
