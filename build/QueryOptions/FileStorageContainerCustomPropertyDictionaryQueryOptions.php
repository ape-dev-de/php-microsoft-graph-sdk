<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorageContainerCustomPropertyDictionary resources
 *
 * Available select fields:
 */
class FileStorageContainerCustomPropertyDictionaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileStorageContainerCustomPropertyDictionary
     */

    /**
     * Select specific FileStorageContainerCustomPropertyDictionary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
