<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplexExtensionValue resources
 *
 * Available select fields:
 */
class ComplexExtensionValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ComplexExtensionValue
     */

    /**
     * Select specific ComplexExtensionValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
