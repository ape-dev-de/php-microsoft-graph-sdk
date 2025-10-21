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
    /**
     * Available select fields for ProtectedApplicationMetadata
     */
    public const FIELD_APPLICATION_LOCATION = 'applicationLocation';

    /**
     * Select specific ProtectedApplicationMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
