<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Print resources
 *
 * Available select fields:
 * - settings
 * - connectors
 * - operations
 * - printers
 * - services
 * - shares
 * - taskDefinitions
 */
class PrintQueryOptions extends QueryOptions
{
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_CONNECTORS = 'connectors';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_PRINTERS = 'printers';
    public const FIELD_SERVICES = 'services';
    public const FIELD_SHARES = 'shares';
    public const FIELD_TASK_DEFINITIONS = 'taskDefinitions';

    /**
     * Select specific Print properties
     * 
     * @param array<string> $select Use PrintQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
