<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseDetails
 */
class LicenseDetails
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Information about the service plans assigned with the license. Read-only. Not nullable.
     * @var ServicePlanInfo[]
     */
    public array $servicePlans = [];

    /** Unique identifier (GUID) for the service SKU. Equal to the skuId property on the related subscribedSku object. Read-only. */
    public ?string $skuId = null;

    /** Unique SKU display name. Equal to the skuPartNumber on the related subscribedSku object; for example, AAD_Premium. Read-only. */
    public ?string $skuPartNumber = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['servicePlans'])) {
            $this->servicePlans = $data['servicePlans'];
        }
        if (isset($data['skuId'])) {
            $this->skuId = $data['skuId'];
        }
        if (isset($data['skuPartNumber'])) {
            $this->skuPartNumber = $data['skuPartNumber'];
        }
    }
}
