<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSignInInsightCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserSignInInsightCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserSignInInsightCollectionResponse properties
     * 
     * @param array<string> $select Use UserSignInInsightCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
