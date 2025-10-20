<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Storage
 */
class Storage
{
    /**
     */
    private ?string $fileStorage;

    /**
     */
    private ?string $settings;

    public function getFileStorage(): ?string
    {
        return $this->fileStorage;
    }

    public function setFileStorage(?string $fileStorage): self
    {
        $this->fileStorage = $fileStorage;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

}
