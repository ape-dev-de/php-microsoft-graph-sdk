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
     */
    private ?string $initiator;

    /**
     */
    private ?string $recordingStatus;


    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    public function getRecordingStatus(): ?string
    {
        return $this->recordingStatus;
    }

    public function setRecordingStatus(?string $recordingStatus): self
    {
        $this->recordingStatus = $recordingStatus;
        return $this;
    }

}
