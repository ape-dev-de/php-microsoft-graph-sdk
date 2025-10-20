<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStatusInfo
 */
class ProvisioningStatusInfo
{
    /**
     * If status isn't success/ skipped details for the error are contained in this.
     */
    private ?string $errorInformation;

    /**
     * Possible values are: success, warning, failure, skipped, unknownFutureValue.
     */
    private ?string $status;

    public function getErrorInformation(): ?string
    {
        return $this->errorInformation;
    }

    public function setErrorInformation(?string $errorInformation): self
    {
        $this->errorInformation = $errorInformation;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
