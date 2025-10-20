<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionSubmitCustomExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnAttributeCollectionSubmitCustomExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnAttributeCollectionSubmitCustomExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use OnAttributeCollectionSubmitCustomExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
