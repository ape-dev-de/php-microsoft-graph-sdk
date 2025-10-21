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
    /**
     * Available select fields for StorageSettings
     */
    public const FIELD_QUOTA = 'quota';

    /**
     * Select specific StorageSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
