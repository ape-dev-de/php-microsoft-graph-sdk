<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTaskDefinition resources
 *
 * Available select fields:
 * - createdBy
 * - displayName
 * - tasks
 */
class PrintTaskDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintTaskDefinition
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific PrintTaskDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
