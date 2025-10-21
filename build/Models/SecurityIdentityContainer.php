<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIdentityContainer
 */
class SecurityIdentityContainer
{
    public function __construct(
        /** Represents potential issues identified by Microsoft Defender for Identity within a customer's Microsoft Defender for Identity configuration. */
        public array $healthIssues = [],
        /** @var string[] Represents a customer's Microsoft Defender for Identity sensors. */
        public array $sensors = []
    ) {}
}
