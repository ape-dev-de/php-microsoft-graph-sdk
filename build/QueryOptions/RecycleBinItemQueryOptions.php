<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecycleBinItem resources
 *
 * Available select fields:
 * - deletedDateTime
 * - deletedFromLocation
 * - size
 */
class RecycleBinItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecycleBinItem
     */
    public const FIELD_DELETED_DATE_TIME = 'deletedDateTime';
    public const FIELD_DELETED_FROM_LOCATION = 'deletedFromLocation';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific RecycleBinItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
