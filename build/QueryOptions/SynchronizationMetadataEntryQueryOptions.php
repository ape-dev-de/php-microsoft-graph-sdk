<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationMetadataEntry resources
 *
 * Available select fields:
 * - key
 * - value
 */
class SynchronizationMetadataEntryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationMetadataEntry
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SynchronizationMetadataEntry properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
