<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScoredEmailAddress resources
 *
 * Available select fields:
 * - address
 * - itemId
 * - relevanceScore
 * - selectionLikelihood
 */
class ScoredEmailAddressQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScoredEmailAddress
     */
    public const FIELD_ADDRESS = 'address';
    public const FIELD_ITEM_ID = 'itemId';
    public const FIELD_RELEVANCE_SCORE = 'relevanceScore';
    public const FIELD_SELECTION_LIKELIHOOD = 'selectionLikelihood';

    /**
     * Select specific ScoredEmailAddress properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
