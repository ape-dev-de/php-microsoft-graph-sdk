<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDocumentVersion resources
 *
 * Available select fields:
 */
class SecurityDocumentVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDocumentVersion
     */

    /**
     * Select specific SecurityDocumentVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
