<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RenameAction resources
 *
 * Available select fields:
 * - newName
 * - oldName
 */
class RenameActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RenameAction
     */
    public const FIELD_NEW_NAME = 'newName';
    public const FIELD_OLD_NAME = 'oldName';

    /**
     * Select specific RenameAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
