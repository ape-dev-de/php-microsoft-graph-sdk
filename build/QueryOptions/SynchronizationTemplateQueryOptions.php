<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationTemplate resources
 *
 * Available select fields:
 */
class SynchronizationTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationTemplate
     */

    /**
     * Select specific SynchronizationTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
