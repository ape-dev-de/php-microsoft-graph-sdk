<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileLobApp
 */
class MobileLobApp
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
     * An abstract base class containing properties for all mobile line-of-business apps.
     * @var string[]
     */
    private array $contentVersions = [];


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

    /**
     * @return string[]
     */
    public function getContentVersions(): array
    {
        return $this->contentVersions;
    }

    /**
     * @param string[] $contentVersions
     */
    public function setContentVersions(array $contentVersions): self
    {
        $this->contentVersions = $contentVersions;
        return $this;
    }

}
