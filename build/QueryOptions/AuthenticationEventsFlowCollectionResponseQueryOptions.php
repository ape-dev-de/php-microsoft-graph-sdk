<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationEventsFlowCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationEventsFlowCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationEventsFlowCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationEventsFlowCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
