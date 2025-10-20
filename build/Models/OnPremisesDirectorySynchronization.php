<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronization
 */
class OnPremisesDirectorySynchronization
{
    /**
     * Consists of configurations that can be fine-tuned and impact the on-premises directory synchronization process for a tenant. Nullable.
     */
    private ?string $configuration;

    /**
     */
    private ?string $features;

    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(?string $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function getFeatures(): ?string
    {
        return $this->features;
    }

    public function setFeatures(?string $features): self
    {
        $this->features = $features;
        return $this;
    }

}
