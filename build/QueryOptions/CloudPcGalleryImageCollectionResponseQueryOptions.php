<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcGalleryImageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcGalleryImageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcGalleryImageCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcGalleryImageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
