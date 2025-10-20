<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LandingPageDetailCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LandingPageDetailCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LandingPageDetailCollectionResponse properties
     * 
     * @param array<string> $select Use LandingPageDetailCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
