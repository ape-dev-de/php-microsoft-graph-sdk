<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRegistryKeyEvidence
 */
class SecurityRegistryKeyEvidence
{
    /**
     * Registry hive of the key that the recorded action was applied to.
     */
    private ?string $registryHive;

    /**
     * Registry key that the recorded action was applied to.
     */
    private ?string $registryKey;


    public function getRegistryHive(): ?string
    {
        return $this->registryHive;
    }

    public function setRegistryHive(?string $registryHive): self
    {
        $this->registryHive = $registryHive;
        return $this;
    }

    public function getRegistryKey(): ?string
    {
        return $this->registryKey;
    }

    public function setRegistryKey(?string $registryKey): self
    {
        $this->registryKey = $registryKey;
        return $this;
    }

}
