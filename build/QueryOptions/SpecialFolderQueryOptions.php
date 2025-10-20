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
    public const FIELD_NAME = 'name';

    /**
     * Select specific SpecialFolder properties
     * 
     * @param array<string> $select Use SpecialFolderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
