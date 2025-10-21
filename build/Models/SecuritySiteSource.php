<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySiteSource
 */
class SecuritySiteSource
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user who created the dataSource. */
        public ?string $createdBy = null,
        /** The date and time the dataSource was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The display name of the dataSource and is the name of the SharePoint site. */
        public ?string $displayName = null,
        /** The hold status of the dataSource.The possible values are: notApplied, applied, applying, removing, partial */
        public ?string $holdStatus = null,
        /**  */
        public ?string $site = null
    ) {}
}
