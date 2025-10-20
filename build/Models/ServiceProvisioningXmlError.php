<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceProvisioningXmlError
 */
class ServiceProvisioningXmlError
{
    /**
     * Error Information published by the Federated Service as an xml string.
     */
    private ?string $errorDetail;

    public function getErrorDetail(): ?string
    {
        return $this->errorDetail;
    }

    public function setErrorDetail(?string $errorDetail): self
    {
        $this->errorDetail = $errorDetail;
        return $this;
    }

}
