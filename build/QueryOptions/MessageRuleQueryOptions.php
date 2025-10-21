<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessageRule resources
 *
 * Available select fields:
 */
class MessageRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MessageRule
     */

    /**
     * Select specific MessageRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
