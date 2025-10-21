<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectMappingMetadata resources
 *
 * Available select fields:
 */
class ObjectMappingMetadataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ObjectMappingMetadata
     */

    /**
     * Select specific ObjectMappingMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
