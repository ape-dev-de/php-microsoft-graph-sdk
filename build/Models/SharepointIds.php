<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharepointIds
 */
class SharepointIds
{
    public function __construct(
        /** The unique identifier (guid) for the item's list in SharePoint. */
        public ?string $listId = null,
        /** An integer identifier for the item within the containing list. */
        public ?string $listItemId = null,
        /** The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site. */
        public ?string $listItemUniqueId = null,
        /** The unique identifier (guid) for the item's site collection (SPSite). */
        public ?string $siteId = null,
        /** The SharePoint URL for the site that contains the item. */
        public ?string $siteUrl = null,
        /** The unique identifier (guid) for the tenancy. */
        public ?string $tenantId = null,
        /** The unique identifier (guid) for the item's site (SPWeb). */
        public ?string $webId = null
    ) {}
}
