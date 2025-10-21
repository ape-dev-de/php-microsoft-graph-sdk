<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppsInstallationOptionsForMac
 */
class AppsInstallationOptionsForMac
{
    /**
     * Specifies whether users can install Microsoft 365 apps on their MAC devices. The default value is true.
     */
    private ?bool $isMicrosoft365AppsEnabled;

    /**
     * Specifies whether users can install Skype for Business on their MAC devices running OS X El Capitan 10.11 or later. The default value is true.
     */
    private ?string $isSkypeForBusinessEnabled;


    public function getIsMicrosoft365AppsEnabled(): ?bool
    {
        return $this->isMicrosoft365AppsEnabled;
    }

    public function setIsMicrosoft365AppsEnabled(?bool $isMicrosoft365AppsEnabled): self
    {
        $this->isMicrosoft365AppsEnabled = $isMicrosoft365AppsEnabled;
        return $this;
    }

    public function getIsSkypeForBusinessEnabled(): ?string
    {
        return $this->isSkypeForBusinessEnabled;
    }

    public function setIsSkypeForBusinessEnabled(?string $isSkypeForBusinessEnabled): self
    {
        $this->isSkypeForBusinessEnabled = $isSkypeForBusinessEnabled;
        return $this;
    }

}
