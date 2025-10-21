<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealthClassificationType resources
 *
 * Available select fields:
 */
class ServiceHealthClassificationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceHealthClassificationType
     */

    /**
     * Select specific ServiceHealthClassificationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
