<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItemAzureRoleResource resources
 *
 * Available select fields:
 */
class AccessReviewInstanceDecisionItemAzureRoleResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstanceDecisionItemAzureRoleResource
     */

    /**
     * Select specific AccessReviewInstanceDecisionItemAzureRoleResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
