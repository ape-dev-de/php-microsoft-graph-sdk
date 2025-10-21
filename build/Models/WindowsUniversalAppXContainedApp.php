<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUniversalAppXContainedApp
 */
class WindowsUniversalAppXContainedApp
{
    /**
     * A class that represents a contained app of a WindowsUniversalAppX app.
     */
    private ?string $appUserModelId;


    public function getAppUserModelId(): ?string
    {
        return $this->appUserModelId;
    }

    public function setAppUserModelId(?string $appUserModelId): self
    {
        $this->appUserModelId = $appUserModelId;
        return $this;
    }

}
