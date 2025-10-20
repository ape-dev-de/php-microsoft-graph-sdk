<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceManagementPartnerAssignment
 */
class ComplianceManagementPartnerAssignment
{
    /**
     * User group targeting for Compliance Management Partner
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
