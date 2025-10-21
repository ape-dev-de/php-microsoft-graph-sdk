<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalSignIn
 */
class ServicePrincipalSignIn
{
    /**
     * appId of the service principal that is signing in.
     */
    private ?string $servicePrincipalId;


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
