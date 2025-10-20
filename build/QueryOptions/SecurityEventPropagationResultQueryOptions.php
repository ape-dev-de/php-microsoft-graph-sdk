<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEventPropagationResult resources
 *
 * Available select fields:
 * - location
 * - serviceName
 * - status
 * - statusInformation
 */
class SecurityEventPropagationResultQueryOptions extends QueryOptions
{
    public const FIELD_LOCATION = 'location';
    public const FIELD_SERVICE_NAME = 'serviceName';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_INFORMATION = 'statusInformation';

    /**
     * Select specific SecurityEventPropagationResult properties
     * 
     * @param array<string> $select Use SecurityEventPropagationResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
