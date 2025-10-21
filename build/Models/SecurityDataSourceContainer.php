<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDataSourceContainer
 */
class SecurityDataSourceContainer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Created date and time of the dataSourceContainer entity. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Display name of the dataSourceContainer entity. */
        public ?string $displayName = null,
        /** The hold status of the dataSourceContainer. The possible values are: notApplied, applied, applying, removing, partial */
        public ?SecurityDataSourceHoldStatus $holdStatus = null,
        /** Last modified date and time of the dataSourceContainer. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Date and time that the dataSourceContainer was released from the case. */
        public ?\DateTimeInterface $releasedDateTime = null,
        /** Latest status of the dataSourceContainer. Possible values are: Active, Released. */
        public ?SecurityDataSourceContainerStatus $status = null
    ) {}
}
