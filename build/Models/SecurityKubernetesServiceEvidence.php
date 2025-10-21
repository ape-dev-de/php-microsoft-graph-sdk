<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesServiceEvidence
 */
class SecurityKubernetesServiceEvidence
{
    public function __construct(
        /** The service cluster IP. */
        public ?string $clusterIP = null,
        /** The service external IPs. */
        public array $externalIPs = [],
        /** The service labels. */
        public ?string $labels = null,
        /** The service name. */
        public ?string $name = null,
        /** The service namespace. */
        public ?string $namespace = null,
        /** The service selector. */
        public ?string $selector = null,
        /** The list of service ports. */
        public array $servicePorts = [],
        /**  */
        public ?string $serviceType = null
    ) {}
}
