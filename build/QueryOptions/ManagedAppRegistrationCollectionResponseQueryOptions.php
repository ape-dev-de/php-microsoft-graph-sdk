<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppRegistrationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedAppRegistrationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedAppRegistrationCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedAppRegistrationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
