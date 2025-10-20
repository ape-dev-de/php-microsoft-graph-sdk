<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionStartCustomExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnAttributeCollectionStartCustomExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnAttributeCollectionStartCustomExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use OnAttributeCollectionStartCustomExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
