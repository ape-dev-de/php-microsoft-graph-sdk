<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ListItem resources
 *
 * Available select fields:
 * - contentType
 * - sharepointIds
 * - analytics
 * - documentSetVersions
 * - driveItem
 * - fields
 * - versions
 */
class ListItemQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_SHAREPOINT_IDS = 'sharepointIds';
    public const FIELD_ANALYTICS = 'analytics';
    public const FIELD_DOCUMENT_SET_VERSIONS = 'documentSetVersions';
    public const FIELD_DRIVE_ITEM = 'driveItem';
    public const FIELD_FIELDS = 'fields';
    public const FIELD_VERSIONS = 'versions';

    /**
     * Select specific ListItem properties
     * 
     * @param array<string> $select Use ListItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
