<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesPodEvidence
 */
class SecurityKubernetesPodEvidence
{
    public function __construct(
        /** The list of pod containers which are not init or ephemeral containers. */
        public array $containers = [],
        /** The pod controller. */
        public ?string $controller = null,
        /** The list of pod ephemeral containers. */
        public array $ephemeralContainers = [],
        /** The list of pod init containers. */
        public array $initContainers = [],
        /** The pod labels. */
        public ?string $labels = null,
        /** The pod name. */
        public ?string $name = null,
        /** The pod namespace. */
        public ?string $namespace = null,
        /** The pod IP. */
        public ?string $podIp = null,
        /** The pod service account. */
        public ?string $serviceAccount = null
    ) {}
}
