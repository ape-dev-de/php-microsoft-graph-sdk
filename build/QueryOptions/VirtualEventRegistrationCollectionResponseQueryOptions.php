<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventRegistrationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventRegistrationCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
