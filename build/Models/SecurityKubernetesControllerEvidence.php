<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesControllerEvidence
 */
class SecurityKubernetesControllerEvidence
{
    public function __construct(
        /** The labels for the Kubernetes pod. */
        public ?string $labels = null,
        /** The controller name. */
        public ?string $name = null,
        /** The service account namespace. */
        public ?string $namespace = null,
        /** The controller type. */
        public ?string $type = null
    ) {}
}
