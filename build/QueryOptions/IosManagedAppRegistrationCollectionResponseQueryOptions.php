<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosManagedAppRegistrationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosManagedAppRegistrationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosManagedAppRegistrationCollectionResponse properties
     * 
     * @param array<string> $select Use IosManagedAppRegistrationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
