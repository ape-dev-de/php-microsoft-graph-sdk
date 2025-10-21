<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesProvisioningError
 */
class OnPremisesProvisioningError
{
    public function __construct(
        /** Category of the provisioning error. Note: Currently, there is only one possible value. Possible value: PropertyConflict - indicates a property value is not unique. Other objects contain the same value for the property. */
        public ?string $category = null,
        /** The date and time at which the error occurred. */
        public ?\DateTimeInterface $occurredDateTime = null,
        /** Name of the directory property causing the error. Current possible values: UserPrincipalName or ProxyAddress */
        public ?string $propertyCausingError = null,
        /** Value of the property causing the error. */
        public ?string $value = null
    ) {}
}
