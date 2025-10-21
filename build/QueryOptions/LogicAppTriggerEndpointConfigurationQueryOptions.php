<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LogicAppTriggerEndpointConfiguration resources
 *
 * Available select fields:
 */
class LogicAppTriggerEndpointConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LogicAppTriggerEndpointConfiguration
     */

    /**
     * Select specific LogicAppTriggerEndpointConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
