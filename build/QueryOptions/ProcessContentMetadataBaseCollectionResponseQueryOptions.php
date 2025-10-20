<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessContentMetadataBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProcessContentMetadataBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProcessContentMetadataBaseCollectionResponse properties
     * 
     * @param array<string> $select Use ProcessContentMetadataBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
