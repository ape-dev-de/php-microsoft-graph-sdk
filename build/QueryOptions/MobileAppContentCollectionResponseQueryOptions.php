<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppContentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileAppContentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileAppContentCollectionResponse properties
     * 
     * @param array<string> $select Use MobileAppContentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
