<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationChannelResource resources
 *
 * Available select fields:
 */
class EducationChannelResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationChannelResource
     */

    /**
     * Select specific EducationChannelResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
