<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileEvidence
 */
class SecurityFileEvidence
{
    /**
     * The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
     */
    private ?string $detectionStatus;

    /**
     * The file details.
     */
    private ?string $fileDetails;

    /**
     * A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     */
    private ?string $mdeDeviceId;


    public function getDetectionStatus(): ?string
    {
        return $this->detectionStatus;
    }

    public function setDetectionStatus(?string $detectionStatus): self
    {
        $this->detectionStatus = $detectionStatus;
        return $this;
    }

    public function getFileDetails(): ?string
    {
        return $this->fileDetails;
    }

    public function setFileDetails(?string $fileDetails): self
    {
        $this->fileDetails = $fileDetails;
        return $this;
    }

    public function getMdeDeviceId(): ?string
    {
        return $this->mdeDeviceId;
    }

    public function setMdeDeviceId(?string $mdeDeviceId): self
    {
        $this->mdeDeviceId = $mdeDeviceId;
        return $this;
    }

}
