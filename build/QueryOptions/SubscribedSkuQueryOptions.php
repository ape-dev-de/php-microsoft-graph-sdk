<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubscribedSku resources
 *
 * Available select fields:
 */
class SubscribedSkuQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubscribedSku
     */

    /**
     * Select specific SubscribedSku properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
