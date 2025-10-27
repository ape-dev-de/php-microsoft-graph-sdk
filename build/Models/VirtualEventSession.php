<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventSession
 */
class VirtualEventSession
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether attendees can turn on their camera. */
    public ?bool $allowAttendeeToEnableCamera = null;

    /** Indicates whether attendees can turn on their microphone. */
    public ?bool $allowAttendeeToEnableMic = null;

    /** Indicates whether breakout rooms are enabled for the meeting. */
    public ?bool $allowBreakoutRooms = null;

    /** Indicates whether the ability to copy and share meeting content is enabled for the meeting. */
    public ?bool $allowCopyingAndSharingMeetingContent = null;

    /** 
     * Specifies the users who can admit from the lobby. Possible values are: organizerAndCoOrganizersAndPresenters, organizerAndCoOrganizers, unknownFutureValue.
     * @var AllowedLobbyAdmitterRoles|\stdClass|null
     */
    public AllowedLobbyAdmitterRoles|\stdClass|null $allowedLobbyAdmitters = null;

    /** 
     * Specifies who can be a presenter in a meeting. Possible values are: everyone, organization, roleIsPresenter, organizer, unknownFutureValue. Inherited from onlineMeetingBase.
     * @var OnlineMeetingPresenters|\stdClass|null
     */
    public OnlineMeetingPresenters|\stdClass|null $allowedPresenters = null;

    /** 
     * Indicates whether live share is enabled for the meeting. Possible values are: enabled, disabled, unknownFutureValue.
     * @var MeetingLiveShareOptions|\stdClass|null
     */
    public MeetingLiveShareOptions|\stdClass|null $allowLiveShare = null;

    /** 
     * Specifies the mode of the meeting chat.
     * @var MeetingChatMode|\stdClass|null
     */
    public MeetingChatMode|\stdClass|null $allowMeetingChat = null;

    /** Specifies if participants are allowed to rename themselves in an instance of the meeting. */
    public ?bool $allowParticipantsToChangeName = null;

    /** Indicates whether PowerPoint live is enabled for the meeting. */
    public ?bool $allowPowerPointSharing = null;

    /** Indicates whether recording is enabled for the meeting. */
    public ?bool $allowRecording = null;

    /** Indicates if Teams reactions are enabled for the meeting. */
    public ?bool $allowTeamworkReactions = null;

    /** Indicates whether transcription is enabled for the meeting. */
    public ?bool $allowTranscription = null;

    /** Indicates whether whiteboard is enabled for the meeting. */
    public ?bool $allowWhiteboard = null;

    /** 
     * The phone access (dial-in) information for an online meeting. Read-only.
     * @var AudioConferencing|\stdClass|null
     */
    public AudioConferencing|\stdClass|null $audioConferencing = null;

    /** 
     * The chat information associated with this online meeting.
     * @var ChatInfo|\stdClass|null
     */
    public ChatInfo|\stdClass|null $chatInfo = null;

    /** 
     * Specifies the configuration settings for meeting chat restrictions.
     * @var ChatRestrictions|\stdClass|null
     */
    public ChatRestrictions|\stdClass|null $chatRestrictions = null;

    /** Indicates whether end-to-end encryption (E2EE) is enabled for the online meeting. */
    public ?bool $isEndToEndEncryptionEnabled = null;

    /** Indicates whether to announce when callers join or leave. */
    public ?bool $isEntryExitAnnounced = null;

    /** 
     * The join information in the language and locale variant specified in 'Accept-Language' request HTTP header. Read-only.
     * @var ItemBody|\stdClass|null
     */
    public ItemBody|\stdClass|null $joinInformation = null;

    /** 
     * Specifies the joinMeetingId, the meeting passcode, and the requirement for the passcode. Once an onlineMeeting is created, the joinMeetingIdSettings can't be modified. To make any changes to this property, you must cancel this meeting and create a new one.
     * @var JoinMeetingIdSettings|\stdClass|null
     */
    public JoinMeetingIdSettings|\stdClass|null $joinMeetingIdSettings = null;

    /** The join URL of the online meeting. Read-only. */
    public ?string $joinWebUrl = null;

    /** 
     * Specifies which participants can bypass the meeting lobby.
     * @var LobbyBypassSettings|\stdClass|null
     */
    public LobbyBypassSettings|\stdClass|null $lobbyBypassSettings = null;

    /** Indicates whether to record the meeting automatically. */
    public ?bool $recordAutomatically = null;

    /** 
     * Specifies whether meeting chat history is shared with participants.  Possible values are: all, none, unknownFutureValue.
     * @var MeetingChatHistoryDefaultMode|\stdClass|null
     */
    public MeetingChatHistoryDefaultMode|\stdClass|null $shareMeetingChatHistoryDefault = null;

    /** The subject of the online meeting. */
    public ?string $subject = null;

    /** The video teleconferencing ID. Read-only. */
    public ?string $videoTeleconferenceId = null;

    /** 
     * Specifies whether the client application should apply a watermark to a content type.
     * @var WatermarkProtectionValues|\stdClass|null
     */
    public WatermarkProtectionValues|\stdClass|null $watermarkProtection = null;

    /** 
     * The attendance reports of an online meeting. Read-only.
     * @var MeetingAttendanceReport[]
     */
    public array $attendanceReports = [];

    /** 
     * The virtual event session end time.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public DateTimeTimeZone|\stdClass|null $endDateTime = null;

    /** 
     * The virtual event session start time.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public DateTimeTimeZone|\stdClass|null $startDateTime = null;

    /** The URL of the video on demand (VOD) for Microsoft Teams events that allows webinar and town hall organizers to quickly publish and share event recordings. */
    public ?string $videoOnDemandWebUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['allowAttendeeToEnableCamera'])) {
            $this->allowAttendeeToEnableCamera = is_bool($data['allowAttendeeToEnableCamera']) ? $data['allowAttendeeToEnableCamera'] : (bool)$data['allowAttendeeToEnableCamera'];
        }
        if (isset($data['allowAttendeeToEnableMic'])) {
            $this->allowAttendeeToEnableMic = is_bool($data['allowAttendeeToEnableMic']) ? $data['allowAttendeeToEnableMic'] : (bool)$data['allowAttendeeToEnableMic'];
        }
        if (isset($data['allowBreakoutRooms'])) {
            $this->allowBreakoutRooms = is_bool($data['allowBreakoutRooms']) ? $data['allowBreakoutRooms'] : (bool)$data['allowBreakoutRooms'];
        }
        if (isset($data['allowCopyingAndSharingMeetingContent'])) {
            $this->allowCopyingAndSharingMeetingContent = is_bool($data['allowCopyingAndSharingMeetingContent']) ? $data['allowCopyingAndSharingMeetingContent'] : (bool)$data['allowCopyingAndSharingMeetingContent'];
        }
        if (isset($data['allowedLobbyAdmitters'])) {
            $this->allowedLobbyAdmitters = is_string($data['allowedLobbyAdmitters']) ? AllowedLobbyAdmitterRoles::tryFrom($data['allowedLobbyAdmitters']) : $data['allowedLobbyAdmitters'];
        }
        if (isset($data['allowedPresenters'])) {
            $this->allowedPresenters = is_string($data['allowedPresenters']) ? OnlineMeetingPresenters::tryFrom($data['allowedPresenters']) : $data['allowedPresenters'];
        }
        if (isset($data['allowLiveShare'])) {
            $this->allowLiveShare = is_string($data['allowLiveShare']) ? MeetingLiveShareOptions::tryFrom($data['allowLiveShare']) : $data['allowLiveShare'];
        }
        if (isset($data['allowMeetingChat'])) {
            $this->allowMeetingChat = is_string($data['allowMeetingChat']) ? MeetingChatMode::tryFrom($data['allowMeetingChat']) : $data['allowMeetingChat'];
        }
        if (isset($data['allowParticipantsToChangeName'])) {
            $this->allowParticipantsToChangeName = is_bool($data['allowParticipantsToChangeName']) ? $data['allowParticipantsToChangeName'] : (bool)$data['allowParticipantsToChangeName'];
        }
        if (isset($data['allowPowerPointSharing'])) {
            $this->allowPowerPointSharing = is_bool($data['allowPowerPointSharing']) ? $data['allowPowerPointSharing'] : (bool)$data['allowPowerPointSharing'];
        }
        if (isset($data['allowRecording'])) {
            $this->allowRecording = is_bool($data['allowRecording']) ? $data['allowRecording'] : (bool)$data['allowRecording'];
        }
        if (isset($data['allowTeamworkReactions'])) {
            $this->allowTeamworkReactions = is_bool($data['allowTeamworkReactions']) ? $data['allowTeamworkReactions'] : (bool)$data['allowTeamworkReactions'];
        }
        if (isset($data['allowTranscription'])) {
            $this->allowTranscription = is_bool($data['allowTranscription']) ? $data['allowTranscription'] : (bool)$data['allowTranscription'];
        }
        if (isset($data['allowWhiteboard'])) {
            $this->allowWhiteboard = is_bool($data['allowWhiteboard']) ? $data['allowWhiteboard'] : (bool)$data['allowWhiteboard'];
        }
        if (isset($data['audioConferencing'])) {
            $this->audioConferencing = is_array($data['audioConferencing']) ? new AudioConferencing($data['audioConferencing']) : $data['audioConferencing'];
        }
        if (isset($data['chatInfo'])) {
            $this->chatInfo = is_array($data['chatInfo']) ? new ChatInfo($data['chatInfo']) : $data['chatInfo'];
        }
        if (isset($data['chatRestrictions'])) {
            $this->chatRestrictions = is_array($data['chatRestrictions']) ? new ChatRestrictions($data['chatRestrictions']) : $data['chatRestrictions'];
        }
        if (isset($data['isEndToEndEncryptionEnabled'])) {
            $this->isEndToEndEncryptionEnabled = is_bool($data['isEndToEndEncryptionEnabled']) ? $data['isEndToEndEncryptionEnabled'] : (bool)$data['isEndToEndEncryptionEnabled'];
        }
        if (isset($data['isEntryExitAnnounced'])) {
            $this->isEntryExitAnnounced = is_bool($data['isEntryExitAnnounced']) ? $data['isEntryExitAnnounced'] : (bool)$data['isEntryExitAnnounced'];
        }
        if (isset($data['joinInformation'])) {
            $this->joinInformation = is_array($data['joinInformation']) ? new ItemBody($data['joinInformation']) : $data['joinInformation'];
        }
        if (isset($data['joinMeetingIdSettings'])) {
            $this->joinMeetingIdSettings = is_array($data['joinMeetingIdSettings']) ? new JoinMeetingIdSettings($data['joinMeetingIdSettings']) : $data['joinMeetingIdSettings'];
        }
        if (isset($data['joinWebUrl'])) {
            $this->joinWebUrl = $data['joinWebUrl'];
        }
        if (isset($data['lobbyBypassSettings'])) {
            $this->lobbyBypassSettings = is_array($data['lobbyBypassSettings']) ? new LobbyBypassSettings($data['lobbyBypassSettings']) : $data['lobbyBypassSettings'];
        }
        if (isset($data['recordAutomatically'])) {
            $this->recordAutomatically = is_bool($data['recordAutomatically']) ? $data['recordAutomatically'] : (bool)$data['recordAutomatically'];
        }
        if (isset($data['shareMeetingChatHistoryDefault'])) {
            $this->shareMeetingChatHistoryDefault = is_string($data['shareMeetingChatHistoryDefault']) ? MeetingChatHistoryDefaultMode::tryFrom($data['shareMeetingChatHistoryDefault']) : $data['shareMeetingChatHistoryDefault'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['videoTeleconferenceId'])) {
            $this->videoTeleconferenceId = $data['videoTeleconferenceId'];
        }
        if (isset($data['watermarkProtection'])) {
            $this->watermarkProtection = is_array($data['watermarkProtection']) ? new WatermarkProtectionValues($data['watermarkProtection']) : $data['watermarkProtection'];
        }
        if (isset($data['attendanceReports'])) {
            $this->attendanceReports = $data['attendanceReports'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_array($data['endDateTime']) ? new DateTimeTimeZone($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_array($data['startDateTime']) ? new DateTimeTimeZone($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['videoOnDemandWebUrl'])) {
            $this->videoOnDemandWebUrl = $data['videoOnDemandWebUrl'];
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
