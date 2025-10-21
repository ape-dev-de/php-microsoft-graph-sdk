<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningErrorInfo
 */
class ProvisioningErrorInfo
{
    /**
     * Additional details if there's error.
     */
    private ?string $additionalDetails;

    /**
     * Categorizes the error code. Possible values are failure, nonServiceFailure, success, unknownFutureValue
     */
    private ?string $errorCategory;

    /**
     * Unique error code if any occurred. Learn more
     */
    private ?string $errorCode;

    /**
     * Summarizes the status and describes why the status happened.
     */
    private ?string $reason;

    /**
     * Provides the resolution for the corresponding error.
     */
    private ?string $recommendedAction;


    public function getAdditionalDetails(): ?string
    {
        return $this->additionalDetails;
    }

    public function setAdditionalDetails(?string $additionalDetails): self
    {
        $this->additionalDetails = $additionalDetails;
        return $this;
    }

    public function getErrorCategory(): ?string
    {
        return $this->errorCategory;
    }

    public function setErrorCategory(?string $errorCategory): self
    {
        $this->errorCategory = $errorCategory;
        return $this;
    }

    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
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

}
