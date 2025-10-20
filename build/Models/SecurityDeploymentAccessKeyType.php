<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeploymentAccessKeyType
 */
class SecurityDeploymentAccessKeyType
{
    /**
     * The deployment access key.
     */
    private ?string $deploymentAccessKey;

    public function getDeploymentAccessKey(): ?string
    {
        return $this->deploymentAccessKey;
    }

    public function setDeploymentAccessKey(?string $deploymentAccessKey): self
    {
        $this->deploymentAccessKey = $deploymentAccessKey;
        return $this;
    }

}
