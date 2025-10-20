<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityLoggedOnUserCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityLoggedOnUserCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityLoggedOnUserCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityLoggedOnUserCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
