<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAutopilotDeviceType resources
 *
 * Available select fields:
 */
class WindowsAutopilotDeviceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsAutopilotDeviceType
     */

    /**
     * Select specific WindowsAutopilotDeviceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
