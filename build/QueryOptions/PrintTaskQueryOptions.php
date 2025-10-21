<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTask resources
 *
 * Available select fields:
 * - parentUrl
 * - status
 * - definition
 * - trigger
 */
class PrintTaskQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintTask
     */
    public const FIELD_PARENT_URL = 'parentUrl';
    public const FIELD_STATUS = 'status';
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_TRIGGER = 'trigger';

    /**
     * Select specific PrintTask properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
