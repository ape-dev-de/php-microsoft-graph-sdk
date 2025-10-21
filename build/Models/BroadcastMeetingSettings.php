<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BroadcastMeetingSettings
 */
class BroadcastMeetingSettings
{
    /**
     * Defines who can join the Teams live event. Possible values are listed in the following table.
     */
    private ?string $allowedAudience;

    /**
     * Caption settings of a Teams live event.
     */
    private ?string $captions;

    /**
     * Indicates whether attendee report is enabled for this Teams live event. Default value is false.
     */
    private ?bool $isAttendeeReportEnabled;

    /**
     * Indicates whether Q&A is enabled for this Teams live event. Default value is false.
     */
    private ?bool $isQuestionAndAnswerEnabled;

    /**
     * Indicates whether recording is enabled for this Teams live event. Default value is false.
     */
    private ?bool $isRecordingEnabled;

    /**
     * Indicates whether video on demand is enabled for this Teams live event. Default value is false.
     */
    private ?string $isVideoOnDemandEnabled;


    public function getAllowedAudience(): ?string
    {
        return $this->allowedAudience;
    }

    public function setAllowedAudience(?string $allowedAudience): self
    {
        $this->allowedAudience = $allowedAudience;
        return $this;
    }

    public function getCaptions(): ?string
    {
        return $this->captions;
    }

    public function setCaptions(?string $captions): self
    {
        $this->captions = $captions;
        return $this;
    }

    public function getIsAttendeeReportEnabled(): ?bool
    {
        return $this->isAttendeeReportEnabled;
    }

    public function setIsAttendeeReportEnabled(?bool $isAttendeeReportEnabled): self
    {
        $this->isAttendeeReportEnabled = $isAttendeeReportEnabled;
        return $this;
    }

    public function getIsQuestionAndAnswerEnabled(): ?bool
    {
        return $this->isQuestionAndAnswerEnabled;
    }

    public function setIsQuestionAndAnswerEnabled(?bool $isQuestionAndAnswerEnabled): self
    {
        $this->isQuestionAndAnswerEnabled = $isQuestionAndAnswerEnabled;
        return $this;
    }

    public function getIsRecordingEnabled(): ?bool
    {
        return $this->isRecordingEnabled;
    }

    public function setIsRecordingEnabled(?bool $isRecordingEnabled): self
    {
        $this->isRecordingEnabled = $isRecordingEnabled;
        return $this;
    }

    public function getIsVideoOnDemandEnabled(): ?string
    {
        return $this->isVideoOnDemandEnabled;
    }

    public function setIsVideoOnDemandEnabled(?string $isVideoOnDemandEnabled): self
    {
        $this->isVideoOnDemandEnabled = $isVideoOnDemandEnabled;
        return $this;
    }

}
