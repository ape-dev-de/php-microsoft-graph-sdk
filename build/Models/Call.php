<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Call
 */
class Call
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The callback URL on which callbacks are delivered. Must be an HTTPS URL. */
    public ?string $callbackUri = null;

    /** A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This identifier must be copied over from Microsoft.Graph.Call.CallChainId. */
    public ?string $callChainId = null;

    /** 
     * Contains the optional features for the call.
     * @var CallOptions|\stdClass|null
     */
    public mixed $callOptions = null;

    /** 
     * The routing information on how the call was retargeted. Read-only.
     * @var CallRoute[]
     */
    public array $callRoutes = [];

    /** 
     * The chat information. Required information for joining a meeting.
     * @var ChatInfo|\stdClass|null
     */
    public mixed $chatInfo = null;

    /** 
     * The direction of the call. The possible values are incoming or outgoing. Read-only.
     * @var CallDirection|\stdClass|null
     */
    public mixed $direction = null;

    /** 
     * Call context associated with an incoming call.
     * @var IncomingContext|\stdClass|null
     */
    public mixed $incomingContext = null;

    /** 
     * The media configuration. Required.
     * @var MediaConfig|\stdClass|null
     */
    public mixed $mediaConfig = null;

    /** 
     * Read-only. The call media state.
     * @var CallMediaState|\stdClass|null
     */
    public mixed $mediaState = null;

    /** 
     * The meeting information. Required information for meeting scenarios.
     * @var MeetingInfo|\stdClass|null
     */
    public mixed $meetingInfo = null;

    /**  */
    public ?string $myParticipantId = null;

    /** 
     * The list of requested modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data.
     * @var Modality[]
     */
    public array $requestedModalities = [];

    /** 
     * The result information. For example, the result can hold termination reason. Read-only.
     * @var ResultInfo|\stdClass|null
     */
    public mixed $resultInfo = null;

    /** 
     * The originator of the call.
     * @var ParticipantInfo|\stdClass|null
     */
    public mixed $source = null;

    /** 
     * The call state. Possible values are: incoming, establishing, ringing, established, hold, transferring, transferAccepted, redirecting, terminating, terminated. Read-only.
     * @var CallState|\stdClass|null
     */
    public mixed $state = null;

    /** The subject of the conversation. */
    public ?string $subject = null;

    /** 
     * The targets of the call. Required information for creating peer to peer call.
     * @var InvitationParticipantInfo[]
     */
    public array $targets = [];

    /**  */
    public ?string $tenantId = null;

    /** 
     * 
     * @var ToneInfo|\stdClass|null
     */
    public mixed $toneInfo = null;

    /** 
     * The transcription information for the call. Read-only.
     * @var CallTranscriptionInfo|\stdClass|null
     */
    public mixed $transcription = null;

    /** 
     * 
     * @var AudioRoutingGroup[]
     */
    public array $audioRoutingGroups = [];

    /** 
     * 
     * @var ContentSharingSession[]
     */
    public array $contentSharingSessions = [];

    /** 
     * 
     * @var CommsOperation[]
     */
    public array $operations = [];

    /** 
     * 
     * @var Participant[]
     */
    public array $participants = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['callbackUri'])) {
            $this->callbackUri = $data['callbackUri'];
        }
        if (isset($data['callChainId'])) {
            $this->callChainId = $data['callChainId'];
        }
        if (isset($data['callOptions'])) {
            $this->callOptions = $data['callOptions'];
        }
        if (isset($data['callRoutes'])) {
            $this->callRoutes = $data['callRoutes'];
        }
        if (isset($data['chatInfo'])) {
            $this->chatInfo = $data['chatInfo'];
        }
        if (isset($data['direction'])) {
            $this->direction = $data['direction'];
        }
        if (isset($data['incomingContext'])) {
            $this->incomingContext = $data['incomingContext'];
        }
        if (isset($data['mediaConfig'])) {
            $this->mediaConfig = $data['mediaConfig'];
        }
        if (isset($data['mediaState'])) {
            $this->mediaState = $data['mediaState'];
        }
        if (isset($data['meetingInfo'])) {
            $this->meetingInfo = $data['meetingInfo'];
        }
        if (isset($data['myParticipantId'])) {
            $this->myParticipantId = $data['myParticipantId'];
        }
        if (isset($data['requestedModalities'])) {
            $this->requestedModalities = $data['requestedModalities'];
        }
        if (isset($data['resultInfo'])) {
            $this->resultInfo = $data['resultInfo'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['targets'])) {
            $this->targets = $data['targets'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['toneInfo'])) {
            $this->toneInfo = $data['toneInfo'];
        }
        if (isset($data['transcription'])) {
            $this->transcription = $data['transcription'];
        }
        if (isset($data['audioRoutingGroups'])) {
            $this->audioRoutingGroups = $data['audioRoutingGroups'];
        }
        if (isset($data['contentSharingSessions'])) {
            $this->contentSharingSessions = $data['contentSharingSessions'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['participants'])) {
            $this->participants = $data['participants'];
        }
    }
}
