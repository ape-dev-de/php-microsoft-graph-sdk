<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorageContainerViewpoint resources
 *
 * Available select fields:
 * - effectiveRole
 */
class FileStorageContainerViewpointQueryOptions extends QueryOptions
{
    public const FIELD_EFFECTIVE_ROLE = 'effectiveRole';

    /**
     * Select specific FileStorageContainerViewpoint properties
     * 
     * @param array<string> $select Use FileStorageContainerViewpointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
