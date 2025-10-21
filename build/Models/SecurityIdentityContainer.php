<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIdentityContainer
 */
class SecurityIdentityContainer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents potential issues identified by Microsoft Defender for Identity within a customer's Microsoft Defender for Identity configuration. */
        public array $healthIssues = [],
        /** Represents a customer's Microsoft Defender for Identity sensors. */
        public array $sensors = []
    ) {}
}
