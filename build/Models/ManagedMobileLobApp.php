<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedMobileLobApp
 */
class ManagedMobileLobApp
{
    /**
     * The internal committed content version.
     */
    private ?string $committedContentVersion;

    /**
     * The name of the main Lob application file.
     */
    private ?string $fileName;

    /**
     * The total size, including all uploaded files.
     */
    private ?float $size;

    /**
     * An abstract base class containing properties for all managed mobile line-of-business apps.
     */
    private ?string $contentVersions;

    public function getCommittedContentVersion(): ?string
    {
        return $this->committedContentVersion;
    }

    public function setCommittedContentVersion(?string $committedContentVersion): self
    {
        $this->committedContentVersion = $committedContentVersion;
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

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(?float $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getContentVersions(): ?string
    {
        return $this->contentVersions;
    }

    public function setContentVersions(?string $contentVersions): self
    {
        $this->contentVersions = $contentVersions;
        return $this;
    }

}
