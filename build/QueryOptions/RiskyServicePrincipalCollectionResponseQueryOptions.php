<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyServicePrincipalCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RiskyServicePrincipalCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RiskyServicePrincipalCollectionResponse properties
     * 
     * @param array<string> $select Use RiskyServicePrincipalCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
