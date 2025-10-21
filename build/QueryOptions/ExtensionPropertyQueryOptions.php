<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExtensionProperty resources
 *
 * Available select fields:
 */
class ExtensionPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExtensionProperty
     */

    /**
     * Select specific ExtensionProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
