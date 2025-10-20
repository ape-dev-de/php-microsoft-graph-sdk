<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharepointIds resources
 *
 * Available select fields:
 * - listId
 * - listItemId
 * - listItemUniqueId
 * - siteId
 * - siteUrl
 * - tenantId
 * - webId
 */
class SharepointIdsQueryOptions extends QueryOptions
{
    public const FIELD_LIST_ID = 'listId';
    public const FIELD_LIST_ITEM_ID = 'listItemId';
    public const FIELD_LIST_ITEM_UNIQUE_ID = 'listItemUniqueId';
    public const FIELD_SITE_ID = 'siteId';
    public const FIELD_SITE_URL = 'siteUrl';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_WEB_ID = 'webId';

    /**
     * Select specific SharepointIds properties
     * 
     * @param array<string> $select Use SharepointIdsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
