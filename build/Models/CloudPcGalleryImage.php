<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcGalleryImage
 */
class CloudPcGalleryImage
{
    /**
     * The display name of this gallery image. For example, Windows 11 Enterprise + Microsoft 365 Apps 22H2. Read-only.
     */
    private ?string $displayName;

    /**
     * The date when the status of the image becomes supportedWithWarning. Users can still provision new Cloud PCs if the current time is later than endDate and earlier than expirationDate. For example, assume the endDate of a gallery image is 2023-9-14 and expirationDate is 2024-3-14, users are able to provision new Cloud PCs if today is 2023-10-01. Read-only.
     */
    private ?\DateTimeInterface $endDate;

    /**
     * The date when the image is no longer available. Users are unable to provision new Cloud PCs if the current time is later than expirationDate. The value is usually endDate plus six months. For example, if the startDate is 2025-10-14, the expirationDate is usually 2026-04-14. Read-only.
     */
    private ?\DateTimeInterface $expirationDate;

    /**
     * The offer name of this gallery image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     */
    private ?string $offerName;

    /**
     * The publisher name of this gallery image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     */
    private ?string $publisherName;

    /**
     * Indicates the size of this image in gigabytes. For example, 64. Read-only.
     */
    private ?float $sizeInGB;

    /**
     * The SKU name of this image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only.
     */
    private ?string $skuName;

    /**
     * The date when the Cloud PC image is available for provisioning new Cloud PCs. For example, 2022-09-20. Read-only.
     */
    private ?\DateTimeInterface $startDate;

    /**
     * The status of the gallery image on the Cloud PC. Possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. The default value is supported. Read-only.
     */
    private ?string $status;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(?\DateTimeInterface $expirationDate): self
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    public function getOfferName(): ?string
    {
        return $this->offerName;
    }

    public function setOfferName(?string $offerName): self
    {
        $this->offerName = $offerName;
        return $this;
    }

    public function getPublisherName(): ?string
    {
        return $this->publisherName;
    }

    public function setPublisherName(?string $publisherName): self
    {
        $this->publisherName = $publisherName;
        return $this;
    }

    public function getSizeInGB(): ?float
    {
        return $this->sizeInGB;
    }

    public function setSizeInGB(?float $sizeInGB): self
    {
        $this->sizeInGB = $sizeInGB;
        return $this;
    }

    public function getSkuName(): ?string
    {
        return $this->skuName;
    }

    public function setSkuName(?string $skuName): self
    {
        $this->skuName = $skuName;
        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
