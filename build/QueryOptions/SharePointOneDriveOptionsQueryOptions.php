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
    public const FIELD_INCLUDE_CONTENT = 'includeContent';

    /**
     * Select specific SharePointOneDriveOptions properties
     * 
     * @param array<string> $select Use SharePointOneDriveOptionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
