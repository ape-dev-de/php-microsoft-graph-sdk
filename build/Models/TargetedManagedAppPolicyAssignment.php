<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppPolicyAssignment
 */
class TargetedManagedAppPolicyAssignment
{
    /**
     * The type for deployment of groups or apps.
     */
    private ?string $target;


    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

}
