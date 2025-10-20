<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExtensionPropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExtensionPropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExtensionPropertyCollectionResponse properties
     * 
     * @param array<string> $select Use ExtensionPropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
