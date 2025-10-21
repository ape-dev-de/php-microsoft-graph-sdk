<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCustodian
 */
class SecurityEdiscoveryCustodian
{
    public function __construct(
        /** Date and time the custodian acknowledged a hold notification. */
        public ?\DateTimeInterface $acknowledgedDateTime = null,
        /** Email address of the custodian. */
        public ?string $email = null,
        /** Operation entity that represents the latest indexing for the custodian. */
        public ?string $lastIndexOperation = null,
        /** Data source entity for SharePoint sites associated with the custodian. */
        public array $siteSources = [],
        /** Data source entity for groups associated with the custodian. */
        public array $unifiedGroupSources = [],
        /** @var string[] Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site. */
        public array $userSources = []
    ) {}
}
