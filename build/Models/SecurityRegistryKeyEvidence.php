<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRegistryKeyEvidence
 */
class SecurityRegistryKeyEvidence
{
    public function __construct(
        /** Registry hive of the key that the recorded action was applied to. */
        public ?string $registryHive = null,
        /** Registry key that the recorded action was applied to. */
        public ?string $registryKey = null
    ) {}
}
