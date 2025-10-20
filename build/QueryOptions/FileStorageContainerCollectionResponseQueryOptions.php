<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorageContainerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class FileStorageContainerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FileStorageContainerCollectionResponse properties
     * 
     * @param array<string> $select Use FileStorageContainerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
