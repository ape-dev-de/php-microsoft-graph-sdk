<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppPublishingState resources
 *
 * Available select fields:
 */
class MobileAppPublishingStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppPublishingState
     */

    /**
     * Select specific MobileAppPublishingState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
