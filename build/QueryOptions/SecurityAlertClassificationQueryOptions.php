<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlertClassification resources
 *
 * Available select fields:
 */
class SecurityAlertClassificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAlertClassification
     */

    /**
     * Select specific SecurityAlertClassification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
