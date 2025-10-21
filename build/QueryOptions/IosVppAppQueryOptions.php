<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppApp resources
 *
 * Available select fields:
 */
class IosVppAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosVppApp
     */

    /**
     * Select specific IosVppApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
