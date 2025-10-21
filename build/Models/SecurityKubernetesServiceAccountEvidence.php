<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesServiceAccountEvidence
 */
class SecurityKubernetesServiceAccountEvidence
{
    public function __construct(
        /** The service account name. */
        public ?string $name = null,
        /** The service account namespace. */
        public ?string $namespace = null
    ) {}
}
