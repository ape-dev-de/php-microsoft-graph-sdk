<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookIcon resources
 *
 * Available select fields:
 * - index
 * - set
 */
class WorkbookIconQueryOptions extends QueryOptions
{
    public const FIELD_INDEX = 'index';
    public const FIELD_SET = 'set';

    /**
     * Select specific WorkbookIcon properties
     * 
     * @param array<string> $select Use WorkbookIconQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
