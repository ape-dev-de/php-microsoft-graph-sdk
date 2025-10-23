<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceStartupProcess
 */
class UserExperienceAnalyticsDeviceStartupProcess
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $managedDeviceId = null;

    /** The name of the process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only. */
    public ?string $processName = null;

    /** The product name of the process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only. */
    public ?string $productName = null;

    /** The publisher of the process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only. */
    public ?string $publisher = null;

    /** The impact of startup process on device boot time in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $startupImpactInMs = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['managedDeviceId'])) {
            $this->managedDeviceId = $data['managedDeviceId'];
        }
        if (isset($data['processName'])) {
            $this->processName = $data['processName'];
        }
        if (isset($data['productName'])) {
            $this->productName = $data['productName'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
        }
        if (isset($data['startupImpactInMs'])) {
            $this->startupImpactInMs = $data['startupImpactInMs'];
        }
    }
}
