<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCustodian
 */
class SecurityEdiscoveryCustodian
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
        public ?SecurityDataSourceContainerStatus $status = null,
        /** Date and time the custodian acknowledged a hold notification. */
        public ?\DateTimeInterface $acknowledgedDateTime = null,
        /** Email address of the custodian. */
        public ?string $email = null,
        /** Operation entity that represents the latest indexing for the custodian. */
        public ?SecurityEdiscoveryIndexOperation $lastIndexOperation = null,
        /** Data source entity for SharePoint sites associated with the custodian. */
        public array $siteSources = [],
        /** Data source entity for groups associated with the custodian. */
        public array $unifiedGroupSources = [],
        /** Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site. */
        public array $userSources = []
    ) {}
}
