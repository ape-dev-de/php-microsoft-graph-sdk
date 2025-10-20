<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmergencyCallEvent resources
 *
 * Available select fields:
 * - callerInfo
 * - emergencyNumberDialed
 * - policyName
 */
class EmergencyCallEventQueryOptions extends QueryOptions
{
    public const FIELD_CALLER_INFO = 'callerInfo';
    public const FIELD_EMERGENCY_NUMBER_DIALED = 'emergencyNumberDialed';
    public const FIELD_POLICY_NAME = 'policyName';

    /**
     * Select specific EmergencyCallEvent properties
     * 
     * @param array<string> $select Use EmergencyCallEventQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
