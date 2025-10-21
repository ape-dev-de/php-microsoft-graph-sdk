<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorageContainerStatus resources
 *
 * Available select fields:
 */
class FileStorageContainerStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileStorageContainerStatus
     */

    /**
     * Select specific FileStorageContainerStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
