<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecordingInfo
 */
class RecordingInfo
{
    /** 
     * The identities of the recording initiator.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /**  */
    public ?RecordingStatus $recordingStatus = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
        if (isset($data['recordingStatus'])) {
            $this->recordingStatus = is_array($data['recordingStatus']) ? new RecordingStatus($data['recordingStatus']) : $data['recordingStatus'];
        }
    }
}
