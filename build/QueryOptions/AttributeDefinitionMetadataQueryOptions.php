<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeDefinitionMetadata resources
 *
 * Available select fields:
 */
class AttributeDefinitionMetadataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeDefinitionMetadata
     */

    /**
     * Select specific AttributeDefinitionMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
