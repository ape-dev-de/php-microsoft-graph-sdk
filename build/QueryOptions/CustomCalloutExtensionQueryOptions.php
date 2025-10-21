<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomCalloutExtension resources
 *
 * Available select fields:
 */
class CustomCalloutExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomCalloutExtension
     */

    /**
     * Select specific CustomCalloutExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
