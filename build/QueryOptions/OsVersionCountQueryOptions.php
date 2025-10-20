<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OsVersionCount resources
 *
 * Available select fields:
 * - deviceCount
 * - lastUpdateDateTime
 * - osVersion
 */
class OsVersionCountQueryOptions extends QueryOptions
{
    public const FIELD_DEVICE_COUNT = 'deviceCount';
    public const FIELD_LAST_UPDATE_DATE_TIME = 'lastUpdateDateTime';
    public const FIELD_OS_VERSION = 'osVersion';

    /**
     * Select specific OsVersionCount properties
     * 
     * @param array<string> $select Use OsVersionCountQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
