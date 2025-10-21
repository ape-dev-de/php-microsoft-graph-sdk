<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationPowerPointResource
 */
class EducationPowerPointResource
{
    /**
     * Location of the file on disk.
     */
    private ?string $fileUrl;


    public function getFileUrl(): ?string
    {
        return $this->fileUrl;
    }

    public function setFileUrl(?string $fileUrl): self
    {
        $this->fileUrl = $fileUrl;
        return $this;
    }

}
