<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsParticipantEndpoint
 */
class CallRecordsParticipantEndpoint
{
    /**
     * Identity associated with the endpoint.
     */
    private ?string $associatedIdentity;

    /**
     * CPU number of cores used by the media endpoint.
     */
    private ?float $cpuCoresCount;

    /**
     * CPU name used by the media endpoint.
     */
    private ?string $cpuName;

    /**
     * CPU processor speed used by the media endpoint.
     */
    private ?float $cpuProcessorSpeedInMhz;

    /**
     * The feedback provided by the user of this endpoint about the quality of the session.
     */
    private ?string $feedback;

    /**
     * Identity associated with the endpoint. The identity property is deprecated and will stop returning data on June 30, 2026. Going forward, use the associatedIdentity property.
     */
    private ?string $identity;

    /**
     * Name of the device used by the media endpoint.
     */
    private ?string $name;

    public function getAssociatedIdentity(): ?string
    {
        return $this->associatedIdentity;
    }

    public function setAssociatedIdentity(?string $associatedIdentity): self
    {
        $this->associatedIdentity = $associatedIdentity;
        return $this;
    }

    public function getCpuCoresCount(): ?float
    {
        return $this->cpuCoresCount;
    }

    public function setCpuCoresCount(?float $cpuCoresCount): self
    {
        $this->cpuCoresCount = $cpuCoresCount;
        return $this;
    }

    public function getCpuName(): ?string
    {
        return $this->cpuName;
    }

    public function setCpuName(?string $cpuName): self
    {
        $this->cpuName = $cpuName;
        return $this;
    }

    public function getCpuProcessorSpeedInMhz(): ?float
    {
        return $this->cpuProcessorSpeedInMhz;
    }

    public function setCpuProcessorSpeedInMhz(?float $cpuProcessorSpeedInMhz): self
    {
        $this->cpuProcessorSpeedInMhz = $cpuProcessorSpeedInMhz;
        return $this;
    }

    public function getFeedback(): ?string
    {
        return $this->feedback;
    }

    public function setFeedback(?string $feedback): self
    {
        $this->feedback = $feedback;
        return $this;
    }

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(?string $identity): self
    {
        $this->identity = $identity;
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

}
