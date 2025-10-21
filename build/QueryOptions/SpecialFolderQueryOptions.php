<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SpecialFolder resources
 *
 * Available select fields:
 * - name
 */
class SpecialFolderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SpecialFolder
     */
    public const FIELD_NAME = 'name';

    /**
     * Select specific SpecialFolder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
