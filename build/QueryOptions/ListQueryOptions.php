<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for List resources
 *
 * Available select fields:
 * - displayName
 * - list
 * - sharepointIds
 * - system
 * - columns
 * - contentTypes
 * - drive
 * - items
 * - operations
 * - subscriptions
 */
class ListQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LIST = 'list';
    public const FIELD_SHAREPOINT_IDS = 'sharepointIds';
    public const FIELD_SYSTEM = 'system';
    public const FIELD_COLUMNS = 'columns';
    public const FIELD_CONTENT_TYPES = 'contentTypes';
    public const FIELD_DRIVE = 'drive';
    public const FIELD_ITEMS = 'items';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_SUBSCRIPTIONS = 'subscriptions';

    /**
     * Select specific List properties
     * 
     * @param array<string> $select Use ListQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
