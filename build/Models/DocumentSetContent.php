<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetContent
 */
class DocumentSetContent
{
    /**
     * Content type information of the file.
     */
    private ?string $contentType;

    /**
     * Name of the file in resource folder that should be added as a default content or a template in the document set.
     */
    private ?string $fileName;

    /**
     * Folder name in which the file will be placed when a new document set is created in the library.
     */
    private ?string $folderName;


    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
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

    public function getFolderName(): ?string
    {
        return $this->folderName;
    }

    public function setFolderName(?string $folderName): self
    {
        $this->folderName = $folderName;
        return $this;
    }

}
