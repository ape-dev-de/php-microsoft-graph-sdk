<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PayloadDeliveryPlatform resources
 *
 * Available select fields:
 */
class PayloadDeliveryPlatformQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PayloadDeliveryPlatform
     */

    /**
     * Select specific PayloadDeliveryPlatform properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
