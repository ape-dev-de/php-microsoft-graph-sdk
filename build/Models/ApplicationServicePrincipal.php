<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationServicePrincipal
 */
class ApplicationServicePrincipal
{
    /**
     */
    private ?string $application;

    /**
     */
    private ?string $servicePrincipal;

    public function getApplication(): ?string
    {
        return $this->application;
    }

    public function setApplication(?string $application): self
    {
        $this->application = $application;
        return $this;
    }

    public function getServicePrincipal(): ?string
    {
        return $this->servicePrincipal;
    }

    public function setServicePrincipal(?string $servicePrincipal): self
    {
        $this->servicePrincipal = $servicePrincipal;
        return $this;
    }

}
