<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembershipOutlierInsightCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MembershipOutlierInsightCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MembershipOutlierInsightCollectionResponse properties
     * 
     * @param array<string> $select Use MembershipOutlierInsightCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
