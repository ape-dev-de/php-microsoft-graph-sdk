<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BroadcastMeetingSettings
 */
class BroadcastMeetingSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Defines who can join the Teams live event. Possible values are listed in the following table.
     * @var BroadcastMeetingAudience|\stdClass|null
     */
    public BroadcastMeetingAudience|\stdClass|null $allowedAudience = null;

    /** 
     * Caption settings of a Teams live event.
     * @var BroadcastMeetingCaptionSettings|\stdClass|null
     */
    public BroadcastMeetingCaptionSettings|\stdClass|null $captions = null;

    /** Indicates whether attendee report is enabled for this Teams live event. Default value is false. */
    public ?bool $isAttendeeReportEnabled = null;

    /** Indicates whether Q&A is enabled for this Teams live event. Default value is false. */
    public ?bool $isQuestionAndAnswerEnabled = null;

    /** Indicates whether recording is enabled for this Teams live event. Default value is false. */
    public ?bool $isRecordingEnabled = null;

    /** Indicates whether video on demand is enabled for this Teams live event. Default value is false. */
    public ?bool $isVideoOnDemandEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowedAudience'])) {
            $this->allowedAudience = is_array($data['allowedAudience']) ? new BroadcastMeetingAudience($data['allowedAudience']) : $data['allowedAudience'];
        }
        if (isset($data['captions'])) {
            $this->captions = is_array($data['captions']) ? new BroadcastMeetingCaptionSettings($data['captions']) : $data['captions'];
        }
        if (isset($data['isAttendeeReportEnabled'])) {
            $this->isAttendeeReportEnabled = is_bool($data['isAttendeeReportEnabled']) ? $data['isAttendeeReportEnabled'] : (bool)$data['isAttendeeReportEnabled'];
        }
        if (isset($data['isQuestionAndAnswerEnabled'])) {
            $this->isQuestionAndAnswerEnabled = is_bool($data['isQuestionAndAnswerEnabled']) ? $data['isQuestionAndAnswerEnabled'] : (bool)$data['isQuestionAndAnswerEnabled'];
        }
        if (isset($data['isRecordingEnabled'])) {
            $this->isRecordingEnabled = is_bool($data['isRecordingEnabled']) ? $data['isRecordingEnabled'] : (bool)$data['isRecordingEnabled'];
        }
        if (isset($data['isVideoOnDemandEnabled'])) {
            $this->isVideoOnDemandEnabled = is_bool($data['isVideoOnDemandEnabled']) ? $data['isVideoOnDemandEnabled'] : (bool)$data['isVideoOnDemandEnabled'];
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
