<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceAccount
 */
class WindowsDeviceAccount
{
    /**
     * Not yet documented
     */
    private ?string $password;


    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }

}
