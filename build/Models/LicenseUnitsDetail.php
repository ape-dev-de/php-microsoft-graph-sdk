<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseUnitsDetail
 */
class LicenseUnitsDetail
{
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
        if (isset($data['enabled'])) {
            $this->enabled = $data['enabled'];
        }
        if (isset($data['lockedOut'])) {
            $this->lockedOut = $data['lockedOut'];
        }
        if (isset($data['suspended'])) {
            $this->suspended = $data['suspended'];
        }
        if (isset($data['warning'])) {
            $this->warning = $data['warning'];
        }
    }
}
