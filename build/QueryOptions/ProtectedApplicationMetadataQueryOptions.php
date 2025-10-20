<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectedApplicationMetadata resources
 *
 * Available select fields:
 * - applicationLocation
 */
class ProtectedApplicationMetadataQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION_LOCATION = 'applicationLocation';

    /**
     * Select specific ProtectedApplicationMetadata properties
     * 
     * @param array<string> $select Use ProtectedApplicationMetadataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
