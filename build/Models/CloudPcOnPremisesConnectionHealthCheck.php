<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnectionHealthCheck
 */
class CloudPcOnPremisesConnectionHealthCheck
{
    /**
     * Additional details about the health check or the recommended action. For exmaple, the string value can be download.microsoft.com:443;software-download.microsoft.com:443; Read-only.
     */
    private ?string $additionalDetail;

    /**
     * The unique identifier of the health check item-related activities. This identifier can be useful in troubleshooting.
     */
    private ?string $correlationId;

    /**
     * The display name for this health check item.
     */
    private ?string $displayName;

    /**
     * The value cannot be modified and is automatically populated when the health check ends. The Timestamp type represents date and time information using ISO 8601 format and is in Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2024 would look like this: ''2024-01-01T00:00:00Z''. Returned by default. Read-only.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The type of error that occurred during this health check. Possible values are: endpointConnectivityCheckCloudPcUrlNotAllowListed, endpointConnectivityCheckWVDUrlNotAllowListed, etc. (The all possible values can refer to cloudPcOnPremisesConnectionHealthCheckErrorType) Read-Only.
     */
    private ?string $errorType;

    /**
     * The recommended action to fix the corresponding error. For example, The Active Directory domain join check failed because the password of the domain join user has expired. Read-Only.
     */
    private ?string $recommendedAction;

    /**
     * The value cannot be modified and is automatically populated when the health check starts. The Timestamp type represents date and time information using ISO 8601 format and is in  Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2024 would look like this: ''2024-01-01T00:00:00Z''. Returned by default. Read-only.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     */
    private ?string $status;

    public function getAdditionalDetail(): ?string
    {
        return $this->additionalDetail;
    }

    public function setAdditionalDetail(?string $additionalDetail): self
    {
        $this->additionalDetail = $additionalDetail;
        return $this;
    }

    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(?string $correlationId): self
    {
        $this->correlationId = $correlationId;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getErrorType(): ?string
    {
        return $this->errorType;
    }

    public function setErrorType(?string $errorType): self
    {
        $this->errorType = $errorType;
        return $this;
    }

    public function getRecommendedAction(): ?string
    {
        return $this->recommendedAction;
    }

    public function setRecommendedAction(?string $recommendedAction): self
    {
        $this->recommendedAction = $recommendedAction;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
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
