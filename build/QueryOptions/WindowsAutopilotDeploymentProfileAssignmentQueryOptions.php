<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAutopilotDeploymentProfileAssignment resources
 *
 * Available select fields:
 */
class WindowsAutopilotDeploymentProfileAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsAutopilotDeploymentProfileAssignment
     */

    /**
     * Select specific WindowsAutopilotDeploymentProfileAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
