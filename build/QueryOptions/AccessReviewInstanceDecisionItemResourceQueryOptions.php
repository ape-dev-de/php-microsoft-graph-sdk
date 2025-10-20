<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItemResource resources
 *
 * Available select fields:
 * - displayName
 * - id
 * - type
 */
class AccessReviewInstanceDecisionItemResourceQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ID = 'id';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AccessReviewInstanceDecisionItemResource properties
     * 
     * @param array<string> $select Use AccessReviewInstanceDecisionItemResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
