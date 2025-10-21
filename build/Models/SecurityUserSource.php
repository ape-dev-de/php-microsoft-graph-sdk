<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserSource
 */
class SecurityUserSource
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user who created the dataSource. */
        public ?IdentitySet $createdBy = null,
        /** The date and time the dataSource was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The display name of the dataSource and is the name of the SharePoint site. */
        public ?string $displayName = null,
        /** The hold status of the dataSource.The possible values are: notApplied, applied, applying, removing, partial */
        public ?SecurityDataSourceHoldStatus $holdStatus = null,
        /** Email address of the user's mailbox. */
        public ?string $email = null,
        /** Specifies which sources are included in this group. Possible values are: mailbox, site. */
        public ?SecuritySourceType $includedSources = null,
        /** The URL of the user's OneDrive for Business site. Read-only. */
        public ?string $siteWebUrl = null
    ) {}
}
