<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHyperlink resources
 *
 * Available select fields:
 * - name
 * - url
 */
class SecurityHyperlinkQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHyperlink
     */
    public const FIELD_NAME = 'name';
    public const FIELD_URL = 'url';

    /**
     * Select specific SecurityHyperlink properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
