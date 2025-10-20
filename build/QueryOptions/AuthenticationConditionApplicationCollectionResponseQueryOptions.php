<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationConditionApplicationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationConditionApplicationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationConditionApplicationCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationConditionApplicationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
