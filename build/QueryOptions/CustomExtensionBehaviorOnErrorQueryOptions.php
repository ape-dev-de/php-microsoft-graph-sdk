<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionBehaviorOnError resources
 *
 * Available select fields:
 */
class CustomExtensionBehaviorOnErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomExtensionBehaviorOnError
     */

    /**
     * Select specific CustomExtensionBehaviorOnError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
