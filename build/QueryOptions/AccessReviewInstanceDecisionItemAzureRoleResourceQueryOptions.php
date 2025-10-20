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
    public const FIELD_SCOPE = 'scope';

    /**
     * Select specific AccessReviewInstanceDecisionItemAzureRoleResource properties
     * 
     * @param array<string> $select Use AccessReviewInstanceDecisionItemAzureRoleResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
