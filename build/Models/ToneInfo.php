<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ToneInfo
 */
class ToneInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** An incremental identifier used for ordering DTMF events. */
    public ?float $sequenceId = null;

    /**  */
    public ?Tone $tone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['sequenceId'])) {
            $this->sequenceId = is_numeric($data['sequenceId']) ? (float)$data['sequenceId'] : $data['sequenceId'];
        }
        if (isset($data['tone'])) {
            $this->tone = is_string($data['tone']) ? Tone::tryFrom($data['tone']) : $data['tone'];
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
