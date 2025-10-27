<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecordingInfo
 */
class RecordingInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The identities of the recording initiator.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $initiator = null;

    /**  */
    public ?RecordingStatus $recordingStatus = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
        if (isset($data['recordingStatus'])) {
            $this->recordingStatus = is_array($data['recordingStatus']) ? new RecordingStatus($data['recordingStatus']) : $data['recordingStatus'];
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
