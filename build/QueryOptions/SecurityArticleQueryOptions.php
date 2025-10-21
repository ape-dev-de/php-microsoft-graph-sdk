<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityArticle resources
 *
 * Available select fields:
 */
class SecurityArticleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityArticle
     */

    /**
     * Select specific SecurityArticle properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
