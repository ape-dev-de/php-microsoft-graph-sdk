<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Call
 */
class Call
{
    /**
     * The callback URL on which callbacks are delivered. Must be an HTTPS URL.
     */
    private ?string $callbackUri;

    /**
     * A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This identifier must be copied over from Microsoft.Graph.Call.CallChainId.
     */
    private ?string $callChainId;

    /**
     * Contains the optional features for the call.
     */
    private ?string $callOptions;

    /**
     * The routing information on how the call was retargeted. Read-only.
     */
    private array $callRoutes = [];

    /**
     * The chat information. Required information for joining a meeting.
     */
    private ?string $chatInfo;

    /**
     * The direction of the call. The possible values are incoming or outgoing. Read-only.
     */
    private ?string $direction;

    /**
     * Call context associated with an incoming call.
     */
    private ?string $incomingContext;

    /**
     * The media configuration. Required.
     */
    private ?string $mediaConfig;

    /**
     * Read-only. The call media state.
     */
    private ?string $mediaState;

    /**
     * The meeting information. Required information for meeting scenarios.
     */
    private ?string $meetingInfo;

    /**
     */
    private ?string $myParticipantId;

    /**
     * The list of requested modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data.
     */
    private array $requestedModalities = [];

    /**
     * The result information. For example, the result can hold termination reason. Read-only.
     */
    private ?string $resultInfo;

    /**
     * The originator of the call.
     */
    private ?string $source;

    /**
     * The call state. Possible values are: incoming, establishing, ringing, established, hold, transferring, transferAccepted, redirecting, terminating, terminated. Read-only.
     */
    private ?string $state;

    /**
     * The subject of the conversation.
     */
    private ?string $subject;

    /**
     * The targets of the call. Required information for creating peer to peer call.
     */
    private array $targets = [];

    /**
     */
    private ?string $tenantId;

    /**
     */
    private ?string $toneInfo;

    /**
     * The transcription information for the call. Read-only.
     */
    private ?string $transcription;

    /**
     */
    private array $audioRoutingGroups = [];

    /**
     */
    private array $contentSharingSessions = [];

    /**
     */
    private array $operations = [];

    /**
     */
    private ?string $participants;

    public function getCallbackUri(): ?string
    {
        return $this->callbackUri;
    }

    public function setCallbackUri(?string $callbackUri): self
    {
        $this->callbackUri = $callbackUri;
        return $this;
    }

    public function getCallChainId(): ?string
    {
        return $this->callChainId;
    }

    public function setCallChainId(?string $callChainId): self
    {
        $this->callChainId = $callChainId;
        return $this;
    }

    public function getCallOptions(): ?string
    {
        return $this->callOptions;
    }

    public function setCallOptions(?string $callOptions): self
    {
        $this->callOptions = $callOptions;
        return $this;
    }

    public function getCallRoutes(): array
    {
        return $this->callRoutes;
    }

    public function setCallRoutes(array $callRoutes): self
    {
        $this->callRoutes = $callRoutes;
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

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;
        return $this;
    }

    public function getIncomingContext(): ?string
    {
        return $this->incomingContext;
    }

    public function setIncomingContext(?string $incomingContext): self
    {
        $this->incomingContext = $incomingContext;
        return $this;
    }

    public function getMediaConfig(): ?string
    {
        return $this->mediaConfig;
    }

    public function setMediaConfig(?string $mediaConfig): self
    {
        $this->mediaConfig = $mediaConfig;
        return $this;
    }

    public function getMediaState(): ?string
    {
        return $this->mediaState;
    }

    public function setMediaState(?string $mediaState): self
    {
        $this->mediaState = $mediaState;
        return $this;
    }

    public function getMeetingInfo(): ?string
    {
        return $this->meetingInfo;
    }

    public function setMeetingInfo(?string $meetingInfo): self
    {
        $this->meetingInfo = $meetingInfo;
        return $this;
    }

    public function getMyParticipantId(): ?string
    {
        return $this->myParticipantId;
    }

    public function setMyParticipantId(?string $myParticipantId): self
    {
        $this->myParticipantId = $myParticipantId;
        return $this;
    }

    public function getRequestedModalities(): array
    {
        return $this->requestedModalities;
    }

    public function setRequestedModalities(array $requestedModalities): self
    {
        $this->requestedModalities = $requestedModalities;
        return $this;
    }

    public function getResultInfo(): ?string
    {
        return $this->resultInfo;
    }

    public function setResultInfo(?string $resultInfo): self
    {
        $this->resultInfo = $resultInfo;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
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

    public function getTargets(): array
    {
        return $this->targets;
    }

    public function setTargets(array $targets): self
    {
        $this->targets = $targets;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    public function getToneInfo(): ?string
    {
        return $this->toneInfo;
    }

    public function setToneInfo(?string $toneInfo): self
    {
        $this->toneInfo = $toneInfo;
        return $this;
    }

    public function getTranscription(): ?string
    {
        return $this->transcription;
    }

    public function setTranscription(?string $transcription): self
    {
        $this->transcription = $transcription;
        return $this;
    }

    public function getAudioRoutingGroups(): array
    {
        return $this->audioRoutingGroups;
    }

    public function setAudioRoutingGroups(array $audioRoutingGroups): self
    {
        $this->audioRoutingGroups = $audioRoutingGroups;
        return $this;
    }

    public function getContentSharingSessions(): array
    {
        return $this->contentSharingSessions;
    }

    public function setContentSharingSessions(array $contentSharingSessions): self
    {
        $this->contentSharingSessions = $contentSharingSessions;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getParticipants(): ?string
    {
        return $this->participants;
    }

    public function setParticipants(?string $participants): self
    {
        $this->participants = $participants;
        return $this;
    }

}
