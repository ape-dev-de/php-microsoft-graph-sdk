<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ToneInfo
 */
class ToneInfo
{
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
        if (isset($data['sequenceId'])) {
            $this->sequenceId = $data['sequenceId'];
        }
        if (isset($data['tone'])) {
            $this->tone = is_array($data['tone']) ? new Tone($data['tone']) : $data['tone'];
        }
    }
}
