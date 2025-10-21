<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingBase
 */
class OnlineMeetingBase
{
    /**
     * Indicates whether attendees can turn on their camera.
     */
    private ?bool $allowAttendeeToEnableCamera;

    /**
     * Indicates whether attendees can turn on their microphone.
     */
    private ?bool $allowAttendeeToEnableMic;

    /**
     * Indicates whether breakout rooms are enabled for the meeting.
     */
    private ?bool $allowBreakoutRooms;

    /**
     * Indicates whether the ability to copy and share meeting content is enabled for the meeting.
     */
    private ?bool $allowCopyingAndSharingMeetingContent;

    /**
     * Specifies the users who can admit from the lobby. Possible values are: organizerAndCoOrganizersAndPresenters, organizerAndCoOrganizers, unknownFutureValue.
     */
    private ?string $allowedLobbyAdmitters;

    /**
     * Specifies who can be a presenter in a meeting. Possible values are: everyone, organization, roleIsPresenter, organizer, unknownFutureValue. Inherited from onlineMeetingBase.
     */
    private ?string $allowedPresenters;

    /**
     * Indicates whether live share is enabled for the meeting. Possible values are: enabled, disabled, unknownFutureValue.
     */
    private ?string $allowLiveShare;

    /**
     * Specifies the mode of the meeting chat.
     */
    private ?string $allowMeetingChat;

    /**
     * Specifies if participants are allowed to rename themselves in an instance of the meeting.
     */
    private ?bool $allowParticipantsToChangeName;

    /**
     * Indicates whether PowerPoint live is enabled for the meeting.
     */
    private ?bool $allowPowerPointSharing;

    /**
     * Indicates whether recording is enabled for the meeting.
     */
    private ?bool $allowRecording;

    /**
     * Indicates if Teams reactions are enabled for the meeting.
     */
    private ?bool $allowTeamworkReactions;

    /**
     * Indicates whether transcription is enabled for the meeting.
     */
    private ?bool $allowTranscription;

    /**
     * Indicates whether whiteboard is enabled for the meeting.
     */
    private ?bool $allowWhiteboard;

    /**
     * The phone access (dial-in) information for an online meeting. Read-only.
     */
    private ?string $audioConferencing;

    /**
     * The chat information associated with this online meeting.
     */
    private ?string $chatInfo;

    /**
     * Specifies the configuration settings for meeting chat restrictions.
     */
    private ?string $chatRestrictions;

    /**
     * Indicates whether end-to-end encryption (E2EE) is enabled for the online meeting.
     */
    private ?bool $isEndToEndEncryptionEnabled;

    /**
     * Indicates whether to announce when callers join or leave.
     */
    private ?bool $isEntryExitAnnounced;

    /**
     * The join information in the language and locale variant specified in 'Accept-Language' request HTTP header. Read-only.
     */
    private ?string $joinInformation;

    /**
     * Specifies the joinMeetingId, the meeting passcode, and the requirement for the passcode. Once an onlineMeeting is created, the joinMeetingIdSettings can''t be modified. To make any changes to this property, you must cancel this meeting and create a new one.
     */
    private ?string $joinMeetingIdSettings;

    /**
     * The join URL of the online meeting. Read-only.
     */
    private ?string $joinWebUrl;

    /**
     * Specifies which participants can bypass the meeting lobby.
     */
    private ?string $lobbyBypassSettings;

    /**
     * Indicates whether to record the meeting automatically.
     */
    private ?bool $recordAutomatically;

    /**
     * Specifies whether meeting chat history is shared with participants.  Possible values are: all, none, unknownFutureValue.
     */
    private ?string $shareMeetingChatHistoryDefault;

    /**
     * The subject of the online meeting.
     */
    private ?string $subject;

    /**
     * The video teleconferencing ID. Read-only.
     */
    private ?string $videoTeleconferenceId;

    /**
     * Specifies whether the client application should apply a watermark to a content type.
     */
    private ?string $watermarkProtection;

    /**
     * The attendance reports of an online meeting. Read-only.
     * @var string[]
     */
    private array $attendanceReports = [];


    public function getAllowAttendeeToEnableCamera(): ?bool
    {
        return $this->allowAttendeeToEnableCamera;
    }

    public function setAllowAttendeeToEnableCamera(?bool $allowAttendeeToEnableCamera): self
    {
        $this->allowAttendeeToEnableCamera = $allowAttendeeToEnableCamera;
        return $this;
    }

    public function getAllowAttendeeToEnableMic(): ?bool
    {
        return $this->allowAttendeeToEnableMic;
    }

    public function setAllowAttendeeToEnableMic(?bool $allowAttendeeToEnableMic): self
    {
        $this->allowAttendeeToEnableMic = $allowAttendeeToEnableMic;
        return $this;
    }

    public function getAllowBreakoutRooms(): ?bool
    {
        return $this->allowBreakoutRooms;
    }

    public function setAllowBreakoutRooms(?bool $allowBreakoutRooms): self
    {
        $this->allowBreakoutRooms = $allowBreakoutRooms;
        return $this;
    }

    public function getAllowCopyingAndSharingMeetingContent(): ?bool
    {
        return $this->allowCopyingAndSharingMeetingContent;
    }

    public function setAllowCopyingAndSharingMeetingContent(?bool $allowCopyingAndSharingMeetingContent): self
    {
        $this->allowCopyingAndSharingMeetingContent = $allowCopyingAndSharingMeetingContent;
        return $this;
    }

    public function getAllowedLobbyAdmitters(): ?string
    {
        return $this->allowedLobbyAdmitters;
    }

    public function setAllowedLobbyAdmitters(?string $allowedLobbyAdmitters): self
    {
        $this->allowedLobbyAdmitters = $allowedLobbyAdmitters;
        return $this;
    }

    public function getAllowedPresenters(): ?string
    {
        return $this->allowedPresenters;
    }

    public function setAllowedPresenters(?string $allowedPresenters): self
    {
        $this->allowedPresenters = $allowedPresenters;
        return $this;
    }

    public function getAllowLiveShare(): ?string
    {
        return $this->allowLiveShare;
    }

    public function setAllowLiveShare(?string $allowLiveShare): self
    {
        $this->allowLiveShare = $allowLiveShare;
        return $this;
    }

    public function getAllowMeetingChat(): ?string
    {
        return $this->allowMeetingChat;
    }

    public function setAllowMeetingChat(?string $allowMeetingChat): self
    {
        $this->allowMeetingChat = $allowMeetingChat;
        return $this;
    }

    public function getAllowParticipantsToChangeName(): ?bool
    {
        return $this->allowParticipantsToChangeName;
    }

    public function setAllowParticipantsToChangeName(?bool $allowParticipantsToChangeName): self
    {
        $this->allowParticipantsToChangeName = $allowParticipantsToChangeName;
        return $this;
    }

    public function getAllowPowerPointSharing(): ?bool
    {
        return $this->allowPowerPointSharing;
    }

    public function setAllowPowerPointSharing(?bool $allowPowerPointSharing): self
    {
        $this->allowPowerPointSharing = $allowPowerPointSharing;
        return $this;
    }

    public function getAllowRecording(): ?bool
    {
        return $this->allowRecording;
    }

    public function setAllowRecording(?bool $allowRecording): self
    {
        $this->allowRecording = $allowRecording;
        return $this;
    }

    public function getAllowTeamworkReactions(): ?bool
    {
        return $this->allowTeamworkReactions;
    }

    public function setAllowTeamworkReactions(?bool $allowTeamworkReactions): self
    {
        $this->allowTeamworkReactions = $allowTeamworkReactions;
        return $this;
    }

    public function getAllowTranscription(): ?bool
    {
        return $this->allowTranscription;
    }

    public function setAllowTranscription(?bool $allowTranscription): self
    {
        $this->allowTranscription = $allowTranscription;
        return $this;
    }

    public function getAllowWhiteboard(): ?bool
    {
        return $this->allowWhiteboard;
    }

    public function setAllowWhiteboard(?bool $allowWhiteboard): self
    {
        $this->allowWhiteboard = $allowWhiteboard;
        return $this;
    }

    public function getAudioConferencing(): ?string
    {
        return $this->audioConferencing;
    }

    public function setAudioConferencing(?string $audioConferencing): self
    {
        $this->audioConferencing = $audioConferencing;
        return $this;
    }

    public function getChatInfo(): ?string
    {
        return $this->chatInfo;
    }

    public function setChatInfo(?string $chatInfo): self
    {
        $this->chatInfo = $chatInfo;
        return $this;
    }

    public function getChatRestrictions(): ?string
    {
        return $this->chatRestrictions;
    }

    public function setChatRestrictions(?string $chatRestrictions): self
    {
        $this->chatRestrictions = $chatRestrictions;
        return $this;
    }

    public function getIsEndToEndEncryptionEnabled(): ?bool
    {
        return $this->isEndToEndEncryptionEnabled;
    }

    public function setIsEndToEndEncryptionEnabled(?bool $isEndToEndEncryptionEnabled): self
    {
        $this->isEndToEndEncryptionEnabled = $isEndToEndEncryptionEnabled;
        return $this;
    }

    public function getIsEntryExitAnnounced(): ?bool
    {
        return $this->isEntryExitAnnounced;
    }

    public function setIsEntryExitAnnounced(?bool $isEntryExitAnnounced): self
    {
        $this->isEntryExitAnnounced = $isEntryExitAnnounced;
        return $this;
    }

    public function getJoinInformation(): ?string
    {
        return $this->joinInformation;
    }

    public function setJoinInformation(?string $joinInformation): self
    {
        $this->joinInformation = $joinInformation;
        return $this;
    }

    public function getJoinMeetingIdSettings(): ?string
    {
        return $this->joinMeetingIdSettings;
    }

    public function setJoinMeetingIdSettings(?string $joinMeetingIdSettings): self
    {
        $this->joinMeetingIdSettings = $joinMeetingIdSettings;
        return $this;
    }

    public function getJoinWebUrl(): ?string
    {
        return $this->joinWebUrl;
    }

    public function setJoinWebUrl(?string $joinWebUrl): self
    {
        $this->joinWebUrl = $joinWebUrl;
        return $this;
    }

    public function getLobbyBypassSettings(): ?string
    {
        return $this->lobbyBypassSettings;
    }

    public function setLobbyBypassSettings(?string $lobbyBypassSettings): self
    {
        $this->lobbyBypassSettings = $lobbyBypassSettings;
        return $this;
    }

    public function getRecordAutomatically(): ?bool
    {
        return $this->recordAutomatically;
    }

    public function setRecordAutomatically(?bool $recordAutomatically): self
    {
        $this->recordAutomatically = $recordAutomatically;
        return $this;
    }

    public function getShareMeetingChatHistoryDefault(): ?string
    {
        return $this->shareMeetingChatHistoryDefault;
    }

    public function setShareMeetingChatHistoryDefault(?string $shareMeetingChatHistoryDefault): self
    {
        $this->shareMeetingChatHistoryDefault = $shareMeetingChatHistoryDefault;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getVideoTeleconferenceId(): ?string
    {
        return $this->videoTeleconferenceId;
    }

    public function setVideoTeleconferenceId(?string $videoTeleconferenceId): self
    {
        $this->videoTeleconferenceId = $videoTeleconferenceId;
        return $this;
    }

    public function getWatermarkProtection(): ?string
    {
        return $this->watermarkProtection;
    }

    public function setWatermarkProtection(?string $watermarkProtection): self
    {
        $this->watermarkProtection = $watermarkProtection;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAttendanceReports(): array
    {
        return $this->attendanceReports;
    }

    /**
     * @param string[] $attendanceReports
     */
    public function setAttendanceReports(array $attendanceReports): self
    {
        $this->attendanceReports = $attendanceReports;
        return $this;
    }

}
