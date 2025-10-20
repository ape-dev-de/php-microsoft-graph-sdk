<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidManagedAppRegistrationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AndroidManagedAppRegistrationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AndroidManagedAppRegistrationCollectionResponse properties
     * 
     * @param array<string> $select Use AndroidManagedAppRegistrationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
