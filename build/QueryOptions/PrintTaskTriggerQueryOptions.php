<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTaskTrigger resources
 *
 * Available select fields:
 * - event
 * - definition
 */
class PrintTaskTriggerQueryOptions extends QueryOptions
{
    public const FIELD_EVENT = 'event';
    public const FIELD_DEFINITION = 'definition';

    /**
     * Select specific PrintTaskTrigger properties
     * 
     * @param array<string> $select Use PrintTaskTriggerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
