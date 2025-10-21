<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingBase resources
 *
 * Available select fields:
 * - allowAttendeeToEnableCamera
 * - allowAttendeeToEnableMic
 * - allowBreakoutRooms
 * - allowCopyingAndSharingMeetingContent
 * - allowedLobbyAdmitters
 * - allowedPresenters
 * - allowLiveShare
 * - allowMeetingChat
 * - allowParticipantsToChangeName
 * - allowPowerPointSharing
 * - allowRecording
 * - allowTeamworkReactions
 * - allowTranscription
 * - allowWhiteboard
 * - audioConferencing
 * - chatInfo
 * - chatRestrictions
 * - isEndToEndEncryptionEnabled
 * - isEntryExitAnnounced
 * - joinInformation
 * - joinMeetingIdSettings
 * - joinWebUrl
 * - lobbyBypassSettings
 * - recordAutomatically
 * - shareMeetingChatHistoryDefault
 * - subject
 * - videoTeleconferenceId
 * - watermarkProtection
 * - attendanceReports
 */
class OnlineMeetingBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnlineMeetingBase
     */
    public const FIELD_ALLOW_ATTENDEE_TO_ENABLE_CAMERA = 'allowAttendeeToEnableCamera';
    public const FIELD_ALLOW_ATTENDEE_TO_ENABLE_MIC = 'allowAttendeeToEnableMic';
    public const FIELD_ALLOW_BREAKOUT_ROOMS = 'allowBreakoutRooms';
    public const FIELD_ALLOW_COPYING_AND_SHARING_MEETING_CONTENT = 'allowCopyingAndSharingMeetingContent';
    public const FIELD_ALLOWED_LOBBY_ADMITTERS = 'allowedLobbyAdmitters';
    public const FIELD_ALLOWED_PRESENTERS = 'allowedPresenters';
    public const FIELD_ALLOW_LIVE_SHARE = 'allowLiveShare';
    public const FIELD_ALLOW_MEETING_CHAT = 'allowMeetingChat';
    public const FIELD_ALLOW_PARTICIPANTS_TO_CHANGE_NAME = 'allowParticipantsToChangeName';
    public const FIELD_ALLOW_POWER_POINT_SHARING = 'allowPowerPointSharing';
    public const FIELD_ALLOW_RECORDING = 'allowRecording';
    public const FIELD_ALLOW_TEAMWORK_REACTIONS = 'allowTeamworkReactions';
    public const FIELD_ALLOW_TRANSCRIPTION = 'allowTranscription';
    public const FIELD_ALLOW_WHITEBOARD = 'allowWhiteboard';
    public const FIELD_AUDIO_CONFERENCING = 'audioConferencing';
    public const FIELD_CHAT_INFO = 'chatInfo';
    public const FIELD_CHAT_RESTRICTIONS = 'chatRestrictions';
    public const FIELD_IS_END_TO_END_ENCRYPTION_ENABLED = 'isEndToEndEncryptionEnabled';
    public const FIELD_IS_ENTRY_EXIT_ANNOUNCED = 'isEntryExitAnnounced';
    public const FIELD_JOIN_INFORMATION = 'joinInformation';
    public const FIELD_JOIN_MEETING_ID_SETTINGS = 'joinMeetingIdSettings';
    public const FIELD_JOIN_WEB_URL = 'joinWebUrl';
    public const FIELD_LOBBY_BYPASS_SETTINGS = 'lobbyBypassSettings';
    public const FIELD_RECORD_AUTOMATICALLY = 'recordAutomatically';
    public const FIELD_SHARE_MEETING_CHAT_HISTORY_DEFAULT = 'shareMeetingChatHistoryDefault';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_VIDEO_TELECONFERENCE_ID = 'videoTeleconferenceId';
    public const FIELD_WATERMARK_PROTECTION = 'watermarkProtection';
    public const FIELD_ATTENDANCE_REPORTS = 'attendanceReports';

    /**
     * Select specific OnlineMeetingBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
