<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesNamespaceEvidence
 */
class SecurityKubernetesNamespaceEvidence
{
    public function __construct(
        /** The namespace cluster. */
        public ?string $cluster = null,
        /** The labels for the Kubernetes pod. */
        public ?string $labels = null,
        /** The namespace name. */
        public ?string $name = null
    ) {}
}
