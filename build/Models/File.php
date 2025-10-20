<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * File
 */
class File
{
    /**
     * Hashes of the file''s binary content, if available. Read-only.
     */
    private ?string $hashes;

    /**
     * The MIME type for the file. This is determined by logic on the server and might not be the value provided when the file was uploaded. Read-only.
     */
    private ?string $mimeType;

    /**
     */
    private ?string $processingMetadata;

    public function getHashes(): ?string
    {
        return $this->hashes;
    }

    public function setHashes(?string $hashes): self
    {
        $this->hashes = $hashes;
        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(?string $mimeType): self
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    public function getProcessingMetadata(): ?string
    {
        return $this->processingMetadata;
    }

    public function setProcessingMetadata(?string $processingMetadata): self
    {
        $this->processingMetadata = $processingMetadata;
        return $this;
    }

}
