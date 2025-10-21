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
     * @var string[]
     */
    private array $signIns = [];


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

    /**
     * @return string[]
     */
    public function getSignIns(): array
    {
        return $this->signIns;
    }

    /**
     * @param string[] $signIns
     */
    public function setSignIns(array $signIns): self
    {
        $this->signIns = $signIns;
        return $this;
    }

}
