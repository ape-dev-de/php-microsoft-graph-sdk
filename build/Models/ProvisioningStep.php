<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStep
 */
class ProvisioningStep
{
    /**
     * Summary of what occurred during the step.
     */
    private ?string $description;

    /**
     * Details of what occurred during the step.
     */
    private ?string $details;

    /**
     * Name of the step.
     */
    private ?string $name;

    /**
     * Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue.
     */
    private ?string $provisioningStepType;

    /**
     * Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue.
     */
    private ?string $status;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getProvisioningStepType(): ?string
    {
        return $this->provisioningStepType;
    }

    public function setProvisioningStepType(?string $provisioningStepType): self
    {
        $this->provisioningStepType = $provisioningStepType;
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
