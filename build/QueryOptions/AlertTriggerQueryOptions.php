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
    /**
     * Available select fields for AlertTrigger
     */
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AlertTrigger properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
