<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnUserCreateStartListenerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnUserCreateStartListenerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnUserCreateStartListenerCollectionResponse properties
     * 
     * @param array<string> $select Use OnUserCreateStartListenerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
