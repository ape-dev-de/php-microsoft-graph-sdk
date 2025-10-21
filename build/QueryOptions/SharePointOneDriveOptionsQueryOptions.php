<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointOneDriveOptions resources
 *
 * Available select fields:
 * - includeContent
 */
class SharePointOneDriveOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharePointOneDriveOptions
     */
    public const FIELD_INCLUDE_CONTENT = 'includeContent';

    /**
     * Select specific SharePointOneDriveOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
