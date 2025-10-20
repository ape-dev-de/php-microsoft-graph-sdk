<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionCalloutInstanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CustomExtensionCalloutInstanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CustomExtensionCalloutInstanceCollectionResponse properties
     * 
     * @param array<string> $select Use CustomExtensionCalloutInstanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
