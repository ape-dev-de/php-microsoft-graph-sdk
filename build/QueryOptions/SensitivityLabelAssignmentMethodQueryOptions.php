<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SensitivityLabelAssignmentMethod resources
 *
 * Available select fields:
 */
class SensitivityLabelAssignmentMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SensitivityLabelAssignmentMethod
     */

    /**
     * Select specific SensitivityLabelAssignmentMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
