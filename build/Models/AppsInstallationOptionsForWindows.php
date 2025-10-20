<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppsInstallationOptionsForWindows
 */
class AppsInstallationOptionsForWindows
{
    /**
     * Specifies whether users can install Microsoft 365 apps, including Skype for Business, on their Windows devices. The default value is true.
     */
    private ?bool $isMicrosoft365AppsEnabled;

    /**
     * Specifies whether users can install Microsoft Project on their Windows devices. The default value is true.
     */
    private ?bool $isProjectEnabled;

    /**
     * Specifies whether users can install Skype for Business (standalone) on their Windows devices. The default value is true.
     */
    private ?bool $isSkypeForBusinessEnabled;

    /**
     * Specifies whether users can install Visio on their Windows devices. The default value is true.
     */
    private ?string $isVisioEnabled;

    public function getIsMicrosoft365AppsEnabled(): ?bool
    {
        return $this->isMicrosoft365AppsEnabled;
    }

    public function setIsMicrosoft365AppsEnabled(?bool $isMicrosoft365AppsEnabled): self
    {
        $this->isMicrosoft365AppsEnabled = $isMicrosoft365AppsEnabled;
        return $this;
    }

    public function getIsProjectEnabled(): ?bool
    {
        return $this->isProjectEnabled;
    }

    public function setIsProjectEnabled(?bool $isProjectEnabled): self
    {
        $this->isProjectEnabled = $isProjectEnabled;
        return $this;
    }

    public function getIsSkypeForBusinessEnabled(): ?bool
    {
        return $this->isSkypeForBusinessEnabled;
    }

    public function setIsSkypeForBusinessEnabled(?bool $isSkypeForBusinessEnabled): self
    {
        $this->isSkypeForBusinessEnabled = $isSkypeForBusinessEnabled;
        return $this;
    }

    public function getIsVisioEnabled(): ?string
    {
        return $this->isVisioEnabled;
    }

    public function setIsVisioEnabled(?string $isVisioEnabled): self
    {
        $this->isVisioEnabled = $isVisioEnabled;
        return $this;
    }

}
