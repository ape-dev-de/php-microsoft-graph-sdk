<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppContentFile
 */
class MobileAppContentFile
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Azure Storage URI. */
    public ?string $azureStorageUri = null;

    /** The time the Azure storage Uri expires. */
    public ?\DateTimeInterface $azureStorageUriExpirationDateTime = null;

    /** The time the file was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** A value indicating whether the file is committed. */
    public ?bool $isCommitted = null;

    /** Indicates whether this content file is a dependency for the main content file. TRUE means that the content file is a dependency, FALSE means that the content file is not a dependency and is the main content file. Defaults to FALSE. */
    public ?bool $isDependency = null;

    /** The manifest information. */
    public ?string $manifest = null;

    /** the file name. */
    public ?string $name = null;

    /** The size of the file prior to encryption. */
    public ?float $size = null;

    /** The size of the file after encryption. */
    public ?float $sizeEncrypted = null;

    /**  */
    public ?MobileAppContentFileUploadState $uploadState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['azureStorageUri'])) {
            $this->azureStorageUri = $data['azureStorageUri'];
        }
        if (isset($data['azureStorageUriExpirationDateTime'])) {
            $this->azureStorageUriExpirationDateTime = is_string($data['azureStorageUriExpirationDateTime']) ? new \DateTimeImmutable($data['azureStorageUriExpirationDateTime']) : $data['azureStorageUriExpirationDateTime'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['isCommitted'])) {
            $this->isCommitted = $data['isCommitted'];
        }
        if (isset($data['isDependency'])) {
            $this->isDependency = $data['isDependency'];
        }
        if (isset($data['manifest'])) {
            $this->manifest = $data['manifest'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
        if (isset($data['sizeEncrypted'])) {
            $this->sizeEncrypted = $data['sizeEncrypted'];
        }
        if (isset($data['uploadState'])) {
            $this->uploadState = $data['uploadState'];
        }
    }
}
