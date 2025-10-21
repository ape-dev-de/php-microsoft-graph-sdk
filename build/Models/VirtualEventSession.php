<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventSession
 */
class VirtualEventSession
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether attendees can turn on their camera. */
        public ?bool $allowAttendeeToEnableCamera = null,
        /** Indicates whether attendees can turn on their microphone. */
        public ?bool $allowAttendeeToEnableMic = null,
        /** Indicates whether breakout rooms are enabled for the meeting. */
        public ?bool $allowBreakoutRooms = null,
        /** Indicates whether the ability to copy and share meeting content is enabled for the meeting. */
        public ?bool $allowCopyingAndSharingMeetingContent = null,
        /** Specifies the users who can admit from the lobby. Possible values are: organizerAndCoOrganizersAndPresenters, organizerAndCoOrganizers, unknownFutureValue. */
        public ?string $allowedLobbyAdmitters = null,
        /** Specifies who can be a presenter in a meeting. Possible values are: everyone, organization, roleIsPresenter, organizer, unknownFutureValue. Inherited from onlineMeetingBase. */
        public ?string $allowedPresenters = null,
        /** Indicates whether live share is enabled for the meeting. Possible values are: enabled, disabled, unknownFutureValue. */
        public ?string $allowLiveShare = null,
        /** Specifies the mode of the meeting chat. */
        public ?string $allowMeetingChat = null,
        /** Specifies if participants are allowed to rename themselves in an instance of the meeting. */
        public ?bool $allowParticipantsToChangeName = null,
        /** Indicates whether PowerPoint live is enabled for the meeting. */
        public ?bool $allowPowerPointSharing = null,
        /** Indicates whether recording is enabled for the meeting. */
        public ?bool $allowRecording = null,
        /** Indicates if Teams reactions are enabled for the meeting. */
        public ?bool $allowTeamworkReactions = null,
        /** Indicates whether transcription is enabled for the meeting. */
        public ?bool $allowTranscription = null,
        /** Indicates whether whiteboard is enabled for the meeting. */
        public ?bool $allowWhiteboard = null,
        /** The phone access (dial-in) information for an online meeting. Read-only. */
        public ?string $audioConferencing = null,
        /** The chat information associated with this online meeting. */
        public ?string $chatInfo = null,
        /** Specifies the configuration settings for meeting chat restrictions. */
        public ?string $chatRestrictions = null,
        /** Indicates whether end-to-end encryption (E2EE) is enabled for the online meeting. */
        public ?bool $isEndToEndEncryptionEnabled = null,
        /** Indicates whether to announce when callers join or leave. */
        public ?bool $isEntryExitAnnounced = null,
        /** The join information in the language and locale variant specified in 'Accept-Language' request HTTP header. Read-only. */
        public ?string $joinInformation = null,
        /** Specifies the joinMeetingId, the meeting passcode, and the requirement for the passcode. Once an onlineMeeting is created, the joinMeetingIdSettings can''t be modified. To make any changes to this property, you must cancel this meeting and create a new one. */
        public ?string $joinMeetingIdSettings = null,
        /** The join URL of the online meeting. Read-only. */
        public ?string $joinWebUrl = null,
        /** Specifies which participants can bypass the meeting lobby. */
        public ?string $lobbyBypassSettings = null,
        /** Indicates whether to record the meeting automatically. */
        public ?bool $recordAutomatically = null,
        /** Specifies whether meeting chat history is shared with participants.  Possible values are: all, none, unknownFutureValue. */
        public ?string $shareMeetingChatHistoryDefault = null,
        /** The subject of the online meeting. */
        public ?string $subject = null,
        /** The video teleconferencing ID. Read-only. */
        public ?string $videoTeleconferenceId = null,
        /** Specifies whether the client application should apply a watermark to a content type. */
        public ?string $watermarkProtection = null,
        /** @var string[] The attendance reports of an online meeting. Read-only. */
        public array $attendanceReports = [],
        /** The virtual event session end time. */
        public ?string $endDateTime = null,
        /** The virtual event session start time. */
        public ?string $startDateTime = null,
        /** The URL of the video on demand (VOD) for Microsoft Teams events that allows webinar and town hall organizers to quickly publish and share event recordings. */
        public ?string $videoOnDemandWebUrl = null
    ) {}
}
