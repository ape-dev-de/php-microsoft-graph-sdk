<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectDefinitionMetadata resources
 *
 * Available select fields:
 */
class ObjectDefinitionMetadataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ObjectDefinitionMetadata
     */

    /**
     * Select specific ObjectDefinitionMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
