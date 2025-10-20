<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResetPasscodeActionResult
 */
class ResetPasscodeActionResult
{
    /**
     * RotateBitLockerKeys action error code. Valid values 0 to 2147483647
     */
    private ?float $errorCode;

    /**
     * Reset passcode action result
     */
    private ?string $passcode;

    public function getErrorCode(): ?float
    {
        return $this->errorCode;
    }

    public function setErrorCode(?float $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getPasscode(): ?string
    {
        return $this->passcode;
    }

    public function setPasscode(?string $passcode): self
    {
        $this->passcode = $passcode;
        return $this;
    }

}
