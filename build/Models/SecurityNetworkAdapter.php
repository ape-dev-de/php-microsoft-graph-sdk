<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityNetworkAdapter
 */
class SecurityNetworkAdapter
{
    /**
     * Indicates whether the network adapter is selected for capturing and analyzing network traffic.
     */
    private ?bool $isEnabled;

    /**
     * The name of the network adapter.
     */
    private ?string $name;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

}
