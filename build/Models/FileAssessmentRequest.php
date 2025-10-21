<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileAssessmentRequest
 */
class FileAssessmentRequest
{
    /**
     * Base64 encoded file content. The file content can't fetch back because it isn't stored.
     */
    private ?string $contentData;

    /**
     * The file name.
     */
    private ?string $fileName;


    public function getContentData(): ?string
    {
        return $this->contentData;
    }

    public function setContentData(?string $contentData): self
    {
        $this->contentData = $contentData;
        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

}
