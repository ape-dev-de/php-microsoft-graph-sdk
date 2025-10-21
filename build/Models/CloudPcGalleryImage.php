<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcGalleryImage
 */
class CloudPcGalleryImage
{
    public function __construct(
        /** The display name of this gallery image. For example, Windows 11 Enterprise + Microsoft 365 Apps 22H2. Read-only. */
        public ?string $displayName = null,
        /** The date when the status of the image becomes supportedWithWarning. Users can still provision new Cloud PCs if the current time is later than endDate and earlier than expirationDate. For example, assume the endDate of a gallery image is 2023-9-14 and expirationDate is 2024-3-14, users are able to provision new Cloud PCs if today is 2023-10-01. Read-only. */
        public ?\DateTimeInterface $endDate = null,
        /** The date when the image is no longer available. Users are unable to provision new Cloud PCs if the current time is later than expirationDate. The value is usually endDate plus six months. For example, if the startDate is 2025-10-14, the expirationDate is usually 2026-04-14. Read-only. */
        public ?\DateTimeInterface $expirationDate = null,
        /** The offer name of this gallery image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only. */
        public ?string $offerName = null,
        /** The publisher name of this gallery image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only. */
        public ?string $publisherName = null,
        /** Indicates the size of this image in gigabytes. For example, 64. Read-only. */
        public ?float $sizeInGB = null,
        /** The SKU name of this image that is passed to Azure Resource Manager (ARM) to retrieve the image resource. Read-only. */
        public ?string $skuName = null,
        /** The date when the Cloud PC image is available for provisioning new Cloud PCs. For example, 2022-09-20. Read-only. */
        public ?\DateTimeInterface $startDate = null,
        /** The status of the gallery image on the Cloud PC. Possible values are: supported, supportedWithWarning, notSupported, unknownFutureValue. The default value is supported. Read-only. */
        public ?string $status = null
    ) {}
}
