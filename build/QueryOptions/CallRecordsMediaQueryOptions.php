<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsMedia resources
 *
 * Available select fields:
 * - calleeDevice
 * - calleeNetwork
 * - callerDevice
 * - callerNetwork
 * - label
 * - streams
 */
class CallRecordsMediaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsMedia
     */
    public const FIELD_CALLEE_DEVICE = 'calleeDevice';
    public const FIELD_CALLEE_NETWORK = 'calleeNetwork';
    public const FIELD_CALLER_DEVICE = 'callerDevice';
    public const FIELD_CALLER_NETWORK = 'callerNetwork';
    public const FIELD_LABEL = 'label';
    public const FIELD_STREAMS = 'streams';

    /**
     * Select specific CallRecordsMedia properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
