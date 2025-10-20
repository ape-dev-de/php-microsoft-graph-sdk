<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditLogRoot
 */
class AuditLogRoot
{
    /**
     */
    private array $directoryAudits = [];

    /**
     */
    private array $provisioning = [];

    /**
     */
    private ?string $signIns;

    public function getDirectoryAudits(): array
    {
        return $this->directoryAudits;
    }

    public function setDirectoryAudits(array $directoryAudits): self
    {
        $this->directoryAudits = $directoryAudits;
        return $this;
    }

    public function getProvisioning(): array
    {
        return $this->provisioning;
    }

    public function setProvisioning(array $provisioning): self
    {
        $this->provisioning = $provisioning;
        return $this;
    }

    public function getSignIns(): ?string
    {
        return $this->signIns;
    }

    public function setSignIns(?string $signIns): self
    {
        $this->signIns = $signIns;
        return $this;
    }

}
