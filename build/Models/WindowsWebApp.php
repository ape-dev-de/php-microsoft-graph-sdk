<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsWebApp
 */
class WindowsWebApp
{
    /**
     * Contains properties and inherited properties for Windows web apps.
     */
    private ?string $appUrl;


    public function getAppUrl(): ?string
    {
        return $this->appUrl;
    }

    public function setAppUrl(?string $appUrl): self
    {
        $this->appUrl = $appUrl;
        return $this;
    }

}
