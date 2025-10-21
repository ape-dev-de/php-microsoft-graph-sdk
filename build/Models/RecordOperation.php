<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecordOperation
 */
class RecordOperation
{
    /**
     * The access token required to retrieve the recording.
     */
    private ?string $recordingAccessToken;

    /**
     * The location where the recording is located.
     */
    private ?string $recordingLocation;


    public function getRecordingAccessToken(): ?string
    {
        return $this->recordingAccessToken;
    }

    public function setRecordingAccessToken(?string $recordingAccessToken): self
    {
        $this->recordingAccessToken = $recordingAccessToken;
        return $this;
    }

    public function getRecordingLocation(): ?string
    {
        return $this->recordingLocation;
    }

    public function setRecordingLocation(?string $recordingLocation): self
    {
        $this->recordingLocation = $recordingLocation;
        return $this;
    }

}
