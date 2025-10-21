<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseDetails
 */
class LicenseDetails
{
    public function __construct(
        /** Information about the service plans assigned with the license. Read-only. Not nullable. */
        public array $servicePlans = [],
        /** Unique identifier (GUID) for the service SKU. Equal to the skuId property on the related subscribedSku object. Read-only. */
        public ?string $skuId = null,
        /** Unique SKU display name. Equal to the skuPartNumber on the related subscribedSku object; for example, AAD_Premium. Read-only. */
        public ?string $skuPartNumber = null
    ) {}
}
