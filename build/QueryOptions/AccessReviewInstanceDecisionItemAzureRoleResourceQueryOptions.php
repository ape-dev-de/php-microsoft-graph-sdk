<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItemAzureRoleResource resources
 *
 * Available select fields:
 * - scope
 */
class AccessReviewInstanceDecisionItemAzureRoleResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstanceDecisionItemAzureRoleResource
     */
    public const FIELD_SCOPE = 'scope';

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
