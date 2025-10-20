<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BroadcastMeetingSettings resources
 *
 * Available select fields:
 * - allowedAudience
 * - captions
 * - isAttendeeReportEnabled
 * - isQuestionAndAnswerEnabled
 * - isRecordingEnabled
 * - isVideoOnDemandEnabled
 */
class BroadcastMeetingSettingsQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_AUDIENCE = 'allowedAudience';
    public const FIELD_CAPTIONS = 'captions';
    public const FIELD_IS_ATTENDEE_REPORT_ENABLED = 'isAttendeeReportEnabled';
    public const FIELD_IS_QUESTION_AND_ANSWER_ENABLED = 'isQuestionAndAnswerEnabled';
    public const FIELD_IS_RECORDING_ENABLED = 'isRecordingEnabled';
    public const FIELD_IS_VIDEO_ON_DEMAND_ENABLED = 'isVideoOnDemandEnabled';

    /**
     * Select specific BroadcastMeetingSettings properties
     * 
     * @param array<string> $select Use BroadcastMeetingSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
