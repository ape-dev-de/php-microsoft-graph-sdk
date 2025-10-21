<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppConsentRequest resources
 *
 * Available select fields:
 */
class AppConsentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppConsentRequest
     */

    /**
     * Select specific AppConsentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
