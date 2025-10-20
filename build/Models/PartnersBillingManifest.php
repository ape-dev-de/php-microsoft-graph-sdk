<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingManifest
 */
class PartnersBillingManifest
{
    /**
     * The total file count for this partner tenant ID.
     */
    private ?float $blobCount;

    /**
     * A collection of blob objects that contain details of all the files for the partner tenant ID.
     */
    private array $blobs = [];

    /**
     * The date and time when a manifest resource was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The billing data file format. The possible value is: compressedJSONLines. Each blob is a compressed file and data in the file is in JSON lines format. Decompress the file to access the data.
     */
    private ?string $dataFormat;

    /**
     * Version of data represented by the manifest. Any change in eTag indicates a new data version.
     */
    private ?string $eTag;

    /**
     * Indicates the division of data. If a given partition has more than the supported number, the data is split into multiple files, each file representing a specific partitionValue. By default, the data in the file is partitioned by the number of line items.
     */
    private ?string $partitionType;

    /**
     * The Microsoft Entra tenant ID of the partner.
     */
    private ?string $partnerTenantId;

    /**
     * The root directory that contains all the files.
     */
    private ?string $rootDirectory;

    /**
     * The SAS token for accessing the directory or an individual file in the directory.
     */
    private ?string $sasToken;

    /**
     * The version of the manifest schema.
     */
    private ?string $schemaVersion;

    public function getBlobCount(): ?float
    {
        return $this->blobCount;
    }

    public function setBlobCount(?float $blobCount): self
    {
        $this->blobCount = $blobCount;
        return $this;
    }

    public function getBlobs(): array
    {
        return $this->blobs;
    }

    public function setBlobs(array $blobs): self
    {
        $this->blobs = $blobs;
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

    public function getDataFormat(): ?string
    {
        return $this->dataFormat;
    }

    public function setDataFormat(?string $dataFormat): self
    {
        $this->dataFormat = $dataFormat;
        return $this;
    }

    public function getETag(): ?string
    {
        return $this->eTag;
    }

    public function setETag(?string $eTag): self
    {
        $this->eTag = $eTag;
        return $this;
    }

    public function getPartitionType(): ?string
    {
        return $this->partitionType;
    }

    public function setPartitionType(?string $partitionType): self
    {
        $this->partitionType = $partitionType;
        return $this;
    }

    public function getPartnerTenantId(): ?string
    {
        return $this->partnerTenantId;
    }

    public function setPartnerTenantId(?string $partnerTenantId): self
    {
        $this->partnerTenantId = $partnerTenantId;
        return $this;
    }

    public function getRootDirectory(): ?string
    {
        return $this->rootDirectory;
    }

    public function setRootDirectory(?string $rootDirectory): self
    {
        $this->rootDirectory = $rootDirectory;
        return $this;
    }

    public function getSasToken(): ?string
    {
        return $this->sasToken;
    }

    public function setSasToken(?string $sasToken): self
    {
        $this->sasToken = $sasToken;
        return $this;
    }

    public function getSchemaVersion(): ?string
    {
        return $this->schemaVersion;
    }

    public function setSchemaVersion(?string $schemaVersion): self
    {
        $this->schemaVersion = $schemaVersion;
        return $this;
    }

}
