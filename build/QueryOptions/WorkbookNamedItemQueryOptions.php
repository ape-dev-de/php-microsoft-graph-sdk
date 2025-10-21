<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookNamedItem resources
 *
 * Available select fields:
 * - comment
 * - name
 * - scope
 * - type
 * - value
 * - visible
 * - worksheet
 */
class WorkbookNamedItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookNamedItem
     */
    public const FIELD_COMMENT = 'comment';
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';
    public const FIELD_VISIBLE = 'visible';
    public const FIELD_WORKSHEET = 'worksheet';

    /**
     * Select specific WorkbookNamedItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
