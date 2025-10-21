<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAutopilotDeploymentProfile resources
 *
 * Available select fields:
 */
class WindowsAutopilotDeploymentProfileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsAutopilotDeploymentProfile
     */

    /**
     * Select specific WindowsAutopilotDeploymentProfile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
