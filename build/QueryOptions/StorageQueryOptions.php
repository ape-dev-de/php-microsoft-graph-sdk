<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Storage resources
 *
 * Available select fields:
 * - fileStorage
 * - settings
 */
class StorageQueryOptions extends QueryOptions
{
    public const FIELD_FILE_STORAGE = 'fileStorage';
    public const FIELD_SETTINGS = 'settings';

    /**
     * Select specific Storage properties
     * 
     * @param array<string> $select Use StorageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
