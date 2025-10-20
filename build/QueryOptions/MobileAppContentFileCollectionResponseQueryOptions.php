<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppContentFileCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileAppContentFileCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileAppContentFileCollectionResponse properties
     * 
     * @param array<string> $select Use MobileAppContentFileCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
