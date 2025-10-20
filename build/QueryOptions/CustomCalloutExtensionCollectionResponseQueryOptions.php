<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomCalloutExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CustomCalloutExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CustomCalloutExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use CustomCalloutExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
