<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeploymentAccessKeyType
 */
class SecurityDeploymentAccessKeyType
{
    public function __construct(
        /** The deployment access key. */
        public ?string $deploymentAccessKey = null
    ) {}
}
