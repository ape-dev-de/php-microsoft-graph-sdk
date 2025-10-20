<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenTypeExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OpenTypeExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OpenTypeExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use OpenTypeExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
