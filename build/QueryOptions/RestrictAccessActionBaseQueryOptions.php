<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestrictAccessActionBase resources
 *
 * Available select fields:
 */
class RestrictAccessActionBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestrictAccessActionBase
     */

    /**
     * Select specific RestrictAccessActionBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
