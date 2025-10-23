<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsFailureInfo
 */
class CallRecordsFailureInfo
{
    /** Classification of why a call or portion of a call failed. */
    public ?string $reason = null;

    /**  */
    public ?CallRecordsFailureStage $stage = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['reason'])) {
            $this->reason = $data['reason'];
        }
        if (isset($data['stage'])) {
            $this->stage = is_array($data['stage']) ? new CallRecordsFailureStage($data['stage']) : $data['stage'];
        }
    }
}
