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
    /**
     * Available select fields for Storage
     */
    public const FIELD_FILE_STORAGE = 'fileStorage';
    public const FIELD_SETTINGS = 'settings';

    /**
     * Select specific Storage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
