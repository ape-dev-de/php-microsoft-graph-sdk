<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsParticipantEndpoint resources
 *
 * Available select fields:
 * - associatedIdentity
 * - cpuCoresCount
 * - cpuName
 * - cpuProcessorSpeedInMhz
 * - feedback
 * - identity
 * - name
 */
class CallRecordsParticipantEndpointQueryOptions extends QueryOptions
{
    public const FIELD_ASSOCIATED_IDENTITY = 'associatedIdentity';
    public const FIELD_CPU_CORES_COUNT = 'cpuCoresCount';
    public const FIELD_CPU_NAME = 'cpuName';
    public const FIELD_CPU_PROCESSOR_SPEED_IN_MHZ = 'cpuProcessorSpeedInMhz';
    public const FIELD_FEEDBACK = 'feedback';
    public const FIELD_IDENTITY = 'identity';
    public const FIELD_NAME = 'name';

    /**
     * Select specific CallRecordsParticipantEndpoint properties
     * 
     * @param array<string> $select Use CallRecordsParticipantEndpointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
