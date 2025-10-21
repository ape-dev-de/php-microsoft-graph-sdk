<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Folder resources
 *
 * Available select fields:
 * - childCount
 * - view
 */
class FolderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Folder
     */
    public const FIELD_CHILD_COUNT = 'childCount';
    public const FIELD_VIEW = 'view';

    /**
     * Select specific Folder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
