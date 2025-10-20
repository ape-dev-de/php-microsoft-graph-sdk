<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Site resources
 *
 * Available select fields:
 * - displayName
 * - error
 * - isPersonalSite
 * - root
 * - sharepointIds
 * - siteCollection
 * - analytics
 * - columns
 * - contentTypes
 * - drive
 * - drives
 * - externalColumns
 * - items
 * - lists
 * - onenote
 * - operations
 * - pages
 * - permissions
 * - sites
 * - termStore
 * - termStores
 */
class SiteQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ERROR = 'error';
    public const FIELD_IS_PERSONAL_SITE = 'isPersonalSite';
    public const FIELD_ROOT = 'root';
    public const FIELD_SHAREPOINT_IDS = 'sharepointIds';
    public const FIELD_SITE_COLLECTION = 'siteCollection';
    public const FIELD_ANALYTICS = 'analytics';
    public const FIELD_COLUMNS = 'columns';
    public const FIELD_CONTENT_TYPES = 'contentTypes';
    public const FIELD_DRIVE = 'drive';
    public const FIELD_DRIVES = 'drives';
    public const FIELD_EXTERNAL_COLUMNS = 'externalColumns';
    public const FIELD_ITEMS = 'items';
    public const FIELD_LISTS = 'lists';
    public const FIELD_ONENOTE = 'onenote';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_PAGES = 'pages';
    public const FIELD_PERMISSIONS = 'permissions';
    public const FIELD_SITES = 'sites';
    public const FIELD_TERM_STORE = 'termStore';
    public const FIELD_TERM_STORES = 'termStores';

    /**
     * Select specific Site properties
     * 
     * @param array<string> $select Use SiteQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
