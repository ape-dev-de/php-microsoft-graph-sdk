<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemRetentionLabel resources
 *
 * Available select fields:
 */
class ItemRetentionLabelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ItemRetentionLabel
     */

    /**
     * Select specific ItemRetentionLabel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
