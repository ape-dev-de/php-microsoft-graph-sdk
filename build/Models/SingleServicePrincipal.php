<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SingleServicePrincipal
 */
class SingleServicePrincipal
{
    /**
     * Description of this service principal.
     */
    private ?string $description;

    /**
     * ID of the servicePrincipal.
     */
    private ?string $servicePrincipalId;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getServicePrincipalId(): ?string
    {
        return $this->servicePrincipalId;
    }

    public function setServicePrincipalId(?string $servicePrincipalId): self
    {
        $this->servicePrincipalId = $servicePrincipalId;
        return $this;
    }

}
