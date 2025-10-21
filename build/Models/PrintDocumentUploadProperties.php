<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintDocumentUploadProperties
 */
class PrintDocumentUploadProperties
{
    /**
     * The document's content (MIME) type.
     */
    private ?string $contentType;

    /**
     * The document's name.
     */
    private ?string $documentName;

    /**
     * The document's size in bytes.
     */
    private ?string $size;


    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }

    public function setDocumentName(?string $documentName): self
    {
        $this->documentName = $documentName;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;
        return $this;
    }

}
