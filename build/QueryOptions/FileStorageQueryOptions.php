<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorage resources
 *
 * Available select fields:
 * - containers
 * - deletedContainers
 */
class FileStorageQueryOptions extends QueryOptions
{
    public const FIELD_CONTAINERS = 'containers';
    public const FIELD_DELETED_CONTAINERS = 'deletedContainers';

    /**
     * Select specific FileStorage properties
     * 
     * @param array<string> $select Use FileStorageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
