<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosDeviceType resources
 *
 * Available select fields:
 * - iPad
 * - iPhoneAndIPod
 */
class IosDeviceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosDeviceType
     */
    public const FIELD_I_PAD = 'iPad';
    public const FIELD_I_PHONE_AND_IPOD = 'iPhoneAndIPod';

    /**
     * Select specific IosDeviceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
