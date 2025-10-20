<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInStatus
 */
class SignInStatus
{
    /**
     * Provides additional details on the sign-in activity
     */
    private ?string $additionalDetails;

    /**
     * Provides the 5-6 digit error code that's generated during a sign-in failure. Check out the list of error codes and messages.
     */
    private ?float $errorCode;

    /**
     * Provides the error message or the reason for failure for the corresponding sign-in activity. Check out the list of error codes and messages.
     */
    private ?string $failureReason;

    public function getAdditionalDetails(): ?string
    {
        return $this->additionalDetails;
    }

    public function setAdditionalDetails(?string $additionalDetails): self
    {
        $this->additionalDetails = $additionalDetails;
        return $this;
    }

    public function getErrorCode(): ?float
    {
        return $this->errorCode;
    }

    public function setErrorCode(?float $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getFailureReason(): ?string
    {
        return $this->failureReason;
    }

    public function setFailureReason(?string $failureReason): self
    {
        $this->failureReason = $failureReason;
        return $this;
    }

}
