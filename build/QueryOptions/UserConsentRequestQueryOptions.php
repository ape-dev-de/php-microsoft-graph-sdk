<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserConsentRequest resources
 *
 * Available select fields:
 */
class UserConsentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserConsentRequest
     */

    /**
     * Select specific UserConsentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
