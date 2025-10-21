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
    /**
     * Available select fields for AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
     */
    public const FIELD_ACCESS_PACKAGE_DISPLAY_NAME = 'accessPackageDisplayName';
    public const FIELD_ACCESS_PACKAGE_ID = 'accessPackageId';

    /**
     * Select specific AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
