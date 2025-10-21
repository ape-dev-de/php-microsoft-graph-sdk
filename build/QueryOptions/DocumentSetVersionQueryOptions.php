<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DocumentSetVersion resources
 *
 * Available select fields:
 */
class DocumentSetVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DocumentSetVersion
     */

    /**
     * Select specific DocumentSetVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
