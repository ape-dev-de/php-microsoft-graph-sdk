<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHostedMediaConfig resources
 *
 * Available select fields:
 */
class ServiceHostedMediaConfigQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceHostedMediaConfig
     */

    /**
     * Select specific ServiceHostedMediaConfig properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
