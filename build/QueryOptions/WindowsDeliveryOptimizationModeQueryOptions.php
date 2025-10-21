<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeliveryOptimizationMode resources
 *
 * Available select fields:
 */
class WindowsDeliveryOptimizationModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDeliveryOptimizationMode
     */

    /**
     * Select specific WindowsDeliveryOptimizationMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
