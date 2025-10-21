<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemSource
 */
class DriveItemSource
{
    /**
     * Enumeration value that indicates the source application where the file was created.
     */
    private ?string $application;

    /**
     * The external identifier for the drive item from the source.
     */
    private ?string $externalId;


    public function getApplication(): ?string
    {
        return $this->application;
    }

    public function setApplication(?string $application): self
    {
        $this->application = $application;
        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

}
