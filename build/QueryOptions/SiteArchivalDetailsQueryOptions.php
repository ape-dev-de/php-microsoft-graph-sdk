<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteArchivalDetails resources
 *
 * Available select fields:
 * - archiveStatus
 */
class SiteArchivalDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteArchivalDetails
     */
    public const FIELD_ARCHIVE_STATUS = 'archiveStatus';

    /**
     * Select specific SiteArchivalDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
