<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Site
 */
class Site
{
    public function __construct(
        /** The full title for the site. Read-only. */
        public ?string $displayName = null,
        /**  */
        public ?string $error = null,
        /** Identifies whether the site is personal or not. Read-only. */
        public ?bool $isPersonalSite = null,
        /** If present, provides the root site in the site collection. Read-only. */
        public ?string $root = null,
        /** Returns identifiers useful for SharePoint REST compatibility. Read-only. */
        public ?string $sharepointIds = null,
        /** Provides details about the site's site collection. Available only on the root site. Read-only. */
        public ?string $siteCollection = null,
        /** Analytics about the view activities that took place on this site. */
        public ?string $analytics = null,
        /** The collection of column definitions reusable across lists under this site. */
        public array $columns = [],
        /** The collection of content types defined for this site. */
        public array $contentTypes = [],
        /** The default drive (document library) for this site. */
        public ?string $drive = null,
        /** The collection of drives (document libraries) under this site. */
        public array $drives = [],
        /**  */
        public array $externalColumns = [],
        /** Used to address any item contained in this site. This collection can't be enumerated. */
        public array $items = [],
        /** The collection of lists under this site. */
        public array $lists = [],
        /** Calls the OneNote service for notebook related operations. */
        public ?string $onenote = null,
        /** The collection of long-running operations on the site. */
        public array $operations = [],
        /** The collection of pages in the baseSitePages list in this site. */
        public array $pages = [],
        /** The permissions associated with the site. Nullable. */
        public array $permissions = [],
        /** The collection of the sub-sites under this site. */
        public array $sites = [],
        /** The default termStore under this site. */
        public ?string $termStore = null,
        /** @var string[] The collection of termStores under this site. */
        public array $termStores = []
    ) {}
}
