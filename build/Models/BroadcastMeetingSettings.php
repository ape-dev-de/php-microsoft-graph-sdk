<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BroadcastMeetingSettings
 */
class BroadcastMeetingSettings
{
    public function __construct(
        /** Defines who can join the Teams live event. Possible values are listed in the following table. */
        public ?string $allowedAudience = null,
        /** Caption settings of a Teams live event. */
        public ?string $captions = null,
        /** Indicates whether attendee report is enabled for this Teams live event. Default value is false. */
        public ?bool $isAttendeeReportEnabled = null,
        /** Indicates whether Q&A is enabled for this Teams live event. Default value is false. */
        public ?bool $isQuestionAndAnswerEnabled = null,
        /** Indicates whether recording is enabled for this Teams live event. Default value is false. */
        public ?bool $isRecordingEnabled = null,
        /** Indicates whether video on demand is enabled for this Teams live event. Default value is false. */
        public ?bool $isVideoOnDemandEnabled = null
    ) {}
}
