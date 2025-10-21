<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCategory
 */
class DeviceCategory
{
    public function __construct(
        /** Optional description for the device category. */
        public ?string $description = null,
        /** Device categories provides a way to organize your devices. Using device categories, company administrators can define their own categories that make sense to their company. These categories can then be applied to a device in the Intune Azure console or selected by a user during device enrollment. You can filter reports and create dynamic Azure Active Directory device groups based on device categories. */
        public ?string $displayName = null
    ) {}
}
