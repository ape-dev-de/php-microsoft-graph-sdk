<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsFailureInfo
 */
class CallRecordsFailureInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['reason'])) {
            $this->reason = $data['reason'];
        }
        if (isset($data['stage'])) {
            $this->stage = is_string($data['stage']) ? CallRecordsFailureStage::tryFrom($data['stage']) : $data['stage'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
