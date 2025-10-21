<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceADAccount
 */
class WindowsDeviceADAccount
{
    /**
     * Not yet documented
     */
    private ?string $domainName;

    /**
     * Not yet documented
     */
    private ?string $userName;


    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;
        return $this;
    }

}
