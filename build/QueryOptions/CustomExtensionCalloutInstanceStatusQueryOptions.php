<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionCalloutInstanceStatus resources
 *
 * Available select fields:
 */
class CustomExtensionCalloutInstanceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomExtensionCalloutInstanceStatus
     */

    /**
     * Select specific CustomExtensionCalloutInstanceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
