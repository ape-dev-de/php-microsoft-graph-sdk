<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RotateBitLockerKeysDeviceActionResult
 */
class RotateBitLockerKeysDeviceActionResult
{
    /**
     * RotateBitLockerKeys device action result
     */
    private ?string $errorCode;


    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

}
