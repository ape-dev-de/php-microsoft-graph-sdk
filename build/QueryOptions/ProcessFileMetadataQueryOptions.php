<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessFileMetadata resources
 *
 * Available select fields:
 * - customProperties
 * - ownerId
 */
class ProcessFileMetadataQueryOptions extends QueryOptions
{
    public const FIELD_CUSTOM_PROPERTIES = 'customProperties';
    public const FIELD_OWNER_ID = 'ownerId';

    /**
     * Select specific ProcessFileMetadata properties
     * 
     * @param array<string> $select Use ProcessFileMetadataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
