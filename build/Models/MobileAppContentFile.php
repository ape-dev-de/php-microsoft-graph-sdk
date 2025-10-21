<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppContentFile
 */
class MobileAppContentFile
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The Azure Storage URI. */
        public ?string $azureStorageUri = null,
        /** The time the Azure storage Uri expires. */
        public ?\DateTimeInterface $azureStorageUriExpirationDateTime = null,
        /** The time the file was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** A value indicating whether the file is committed. */
        public ?bool $isCommitted = null,
        /** Indicates whether this content file is a dependency for the main content file. TRUE means that the content file is a dependency, FALSE means that the content file is not a dependency and is the main content file. Defaults to FALSE. */
        public ?bool $isDependency = null,
        /** The manifest information. */
        public ?string $manifest = null,
        /** the file name. */
        public ?string $name = null,
        /** The size of the file prior to encryption. */
        public ?float $size = null,
        /** The size of the file after encryption. */
        public ?float $sizeEncrypted = null,
        /** Contains properties for a single installer file that is associated with a given mobileAppContent version. */
        public ?string $uploadState = null
    ) {}
}
