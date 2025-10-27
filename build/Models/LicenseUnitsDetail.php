<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseUnitsDetail
 */
class LicenseUnitsDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The number of units that are enabled for the active subscription of the service SKU. */
    public ?float $enabled = null;

    /** The number of units that are locked out because the customer canceled their subscription of the service SKU. */
    public ?float $lockedOut = null;

    /** The number of units that are suspended because the subscription of the service SKU has been canceled. The units can't be assigned but can still be reactivated before they're deleted. */
    public ?float $suspended = null;

    /** The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it's canceled (moved to a suspended state). */
    public ?float $warning = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['enabled'])) {
            $this->enabled = is_numeric($data['enabled']) ? (float)$data['enabled'] : $data['enabled'];
        }
        if (isset($data['lockedOut'])) {
            $this->lockedOut = is_numeric($data['lockedOut']) ? (float)$data['lockedOut'] : $data['lockedOut'];
        }
        if (isset($data['suspended'])) {
            $this->suspended = is_numeric($data['suspended']) ? (float)$data['suspended'] : $data['suspended'];
        }
        if (isset($data['warning'])) {
            $this->warning = is_numeric($data['warning']) ? (float)$data['warning'] : $data['warning'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
