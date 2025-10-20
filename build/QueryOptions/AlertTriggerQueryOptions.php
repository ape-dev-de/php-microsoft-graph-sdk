<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlertTrigger resources
 *
 * Available select fields:
 * - name
 * - type
 * - value
 */
class AlertTriggerQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AlertTrigger properties
     * 
     * @param array<string> $select Use AlertTriggerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
