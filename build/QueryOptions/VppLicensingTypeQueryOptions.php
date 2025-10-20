<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VppLicensingType resources
 *
 * Available select fields:
 * - supportsDeviceLicensing
 * - supportsUserLicensing
 */
class VppLicensingTypeQueryOptions extends QueryOptions
{
    public const FIELD_SUPPORTS_DEVICE_LICENSING = 'supportsDeviceLicensing';
    public const FIELD_SUPPORTS_USER_LICENSING = 'supportsUserLicensing';

    /**
     * Select specific VppLicensingType properties
     * 
     * @param array<string> $select Use VppLicensingTypeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
