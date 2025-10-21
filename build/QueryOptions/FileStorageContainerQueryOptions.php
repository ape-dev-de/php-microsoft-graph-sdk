<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorageContainer resources
 *
 * Available select fields:
 */
class FileStorageContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileStorageContainer
     */

    /**
     * Select specific FileStorageContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
