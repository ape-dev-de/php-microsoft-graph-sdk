<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationMediaResource
 */
class EducationMediaResource
{
    /**
     * Location of the file on shared point folder. Required
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
