<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource resources
 *
 * Available select fields:
 */
class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
     */

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
