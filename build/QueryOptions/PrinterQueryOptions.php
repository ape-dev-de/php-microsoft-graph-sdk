<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Printer resources
 *
 * Available select fields:
 * - hasPhysicalDevice
 * - isShared
 * - lastSeenDateTime
 * - registeredDateTime
 * - connectors
 * - shares
 * - taskTriggers
 */
class PrinterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Printer
     */
    public const FIELD_HAS_PHYSICAL_DEVICE = 'hasPhysicalDevice';
    public const FIELD_IS_SHARED = 'isShared';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_REGISTERED_DATE_TIME = 'registeredDateTime';
    public const FIELD_CONNECTORS = 'connectors';
    public const FIELD_SHARES = 'shares';
    public const FIELD_TASK_TRIGGERS = 'taskTriggers';

    /**
     * Select specific Printer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
