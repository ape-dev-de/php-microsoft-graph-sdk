<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UsageDetails resources
 *
 * Available select fields:
 * - lastAccessedDateTime
 * - lastModifiedDateTime
 */
class UsageDetailsQueryOptions extends QueryOptions
{
    public const FIELD_LAST_ACCESSED_DATE_TIME = 'lastAccessedDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific UsageDetails properties
     * 
     * @param array<string> $select Use UsageDetailsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
