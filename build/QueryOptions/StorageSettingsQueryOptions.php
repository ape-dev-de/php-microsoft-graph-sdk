<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StorageSettings resources
 *
 * Available select fields:
 * - quota
 */
class StorageSettingsQueryOptions extends QueryOptions
{
    public const FIELD_QUOTA = 'quota';

    /**
     * Select specific StorageSettings properties
     * 
     * @param array<string> $select Use StorageSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
