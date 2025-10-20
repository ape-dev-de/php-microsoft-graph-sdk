<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlow
 */
class IdentityUserFlow
{
    /**
     */
    private ?string $userFlowType;

    /**
     */
    private ?string $userFlowTypeVersion;

    public function getUserFlowType(): ?string
    {
        return $this->userFlowType;
    }

    public function setUserFlowType(?string $userFlowType): self
    {
        $this->userFlowType = $userFlowType;
        return $this;
    }

    public function getUserFlowTypeVersion(): ?string
    {
        return $this->userFlowTypeVersion;
    }

    public function setUserFlowTypeVersion(?string $userFlowTypeVersion): self
    {
        $this->userFlowTypeVersion = $userFlowTypeVersion;
        return $this;
    }

}
