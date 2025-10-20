<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityBlobEvidence
 */
class SecurityBlobEvidence
{
    /**
     * The container which the blob belongs to.
     */
    private ?string $blobContainer;

    /**
     * The Etag associated with this blob.
     */
    private ?string $etag;

    /**
     * The file hashes associated with this blob.
     */
    private array $fileHashes = [];

    /**
     * The name of the blob.
     */
    private ?string $name;

    /**
     * The full URL representation of the blob.
     */
    private ?string $url;

    public function getBlobContainer(): ?string
    {
        return $this->blobContainer;
    }

    public function setBlobContainer(?string $blobContainer): self
    {
        $this->blobContainer = $blobContainer;
        return $this;
    }

    public function getEtag(): ?string
    {
        return $this->etag;
    }

    public function setEtag(?string $etag): self
    {
        $this->etag = $etag;
        return $this;
    }

    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }

    public function setFileHashes(array $fileHashes): self
    {
        $this->fileHashes = $fileHashes;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
