<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesClusterEvidence
 */
class SecurityKubernetesClusterEvidence
{
    public function __construct(
        /** The cloud identifier of the cluster. Can be either an amazonResourceEvidence, azureResourceEvidence, or googleCloudResourceEvidence object. */
        public ?string $cloudResource = null,
        /** The distribution type of the cluster. */
        public ?string $distribution = null,
        /** The cluster name. */
        public ?string $name = null,
        /** The platform the cluster runs on. Possible values are: unknown, aks, eks, gke, arc, unknownFutureValue. */
        public ?string $platform = null,
        /** The kubernetes version of the cluster. */
        public ?string $version = null
    ) {}
}
