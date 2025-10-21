<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityStream resources
 *
 * Available select fields:
 * - name
 */
class SecurityStreamQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityStream
     */
    public const FIELD_NAME = 'name';

    /**
     * Select specific SecurityStream properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
