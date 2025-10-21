<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppContentFile
 */
class MobileAppContentFile
{
    /**
     * The Azure Storage URI.
     */
    private ?string $azureStorageUri;

    /**
     * The time the Azure storage Uri expires.
     */
    private ?\DateTimeInterface $azureStorageUriExpirationDateTime;

    /**
     * The time the file was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * A value indicating whether the file is committed.
     */
    private ?bool $isCommitted;

    /**
     * Indicates whether this content file is a dependency for the main content file. TRUE means that the content file is a dependency, FALSE means that the content file is not a dependency and is the main content file. Defaults to FALSE.
     */
    private ?bool $isDependency;

    /**
     * The manifest information.
     */
    private ?string $manifest;

    /**
     * the file name.
     */
    private ?string $name;

    /**
     * The size of the file prior to encryption.
     */
    private ?float $size;

    /**
     * The size of the file after encryption.
     */
    private ?float $sizeEncrypted;

    /**
     * Contains properties for a single installer file that is associated with a given mobileAppContent version.
     */
    private ?string $uploadState;


    public function getAzureStorageUri(): ?string
    {
        return $this->azureStorageUri;
    }

    public function setAzureStorageUri(?string $azureStorageUri): self
    {
        $this->azureStorageUri = $azureStorageUri;
        return $this;
    }

    public function getAzureStorageUriExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->azureStorageUriExpirationDateTime;
    }

    public function setAzureStorageUriExpirationDateTime(?\DateTimeInterface $azureStorageUriExpirationDateTime): self
    {
        $this->azureStorageUriExpirationDateTime = $azureStorageUriExpirationDateTime;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getIsCommitted(): ?bool
    {
        return $this->isCommitted;
    }

    public function setIsCommitted(?bool $isCommitted): self
    {
        $this->isCommitted = $isCommitted;
        return $this;
    }

    public function getIsDependency(): ?bool
    {
        return $this->isDependency;
    }

    public function setIsDependency(?bool $isDependency): self
    {
        $this->isDependency = $isDependency;
        return $this;
    }

    public function getManifest(): ?string
    {
        return $this->manifest;
    }

    public function setManifest(?string $manifest): self
    {
        $this->manifest = $manifest;
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

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(?float $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getSizeEncrypted(): ?float
    {
        return $this->sizeEncrypted;
    }

    public function setSizeEncrypted(?float $sizeEncrypted): self
    {
        $this->sizeEncrypted = $sizeEncrypted;
        return $this;
    }

    public function getUploadState(): ?string
    {
        return $this->uploadState;
    }

    public function setUploadState(?string $uploadState): self
    {
        $this->uploadState = $uploadState;
        return $this;
    }

}
