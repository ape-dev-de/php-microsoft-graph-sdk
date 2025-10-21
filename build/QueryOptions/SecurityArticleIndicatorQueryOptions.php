<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityArticleIndicator resources
 *
 * Available select fields:
 */
class SecurityArticleIndicatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityArticleIndicator
     */

    /**
     * Select specific SecurityArticleIndicator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
