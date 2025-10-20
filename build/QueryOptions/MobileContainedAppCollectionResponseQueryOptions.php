<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileContainedAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileContainedAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileContainedAppCollectionResponse properties
     * 
     * @param array<string> $select Use MobileContainedAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
