<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Call
 */
class Call
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The callback URL on which callbacks are delivered. Must be an HTTPS URL. */
        public ?string $callbackUri = null,
        /** A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This identifier must be copied over from Microsoft.Graph.Call.CallChainId. */
        public ?string $callChainId = null,
        /** Contains the optional features for the call. */
        public ?string $callOptions = null,
        /** The routing information on how the call was retargeted. Read-only. */
        public array $callRoutes = [],
        /** The chat information. Required information for joining a meeting. */
        public ?string $chatInfo = null,
        /** The direction of the call. The possible values are incoming or outgoing. Read-only. */
        public ?string $direction = null,
        /** Call context associated with an incoming call. */
        public ?string $incomingContext = null,
        /** The media configuration. Required. */
        public ?string $mediaConfig = null,
        /** Read-only. The call media state. */
        public ?string $mediaState = null,
        /** The meeting information. Required information for meeting scenarios. */
        public ?string $meetingInfo = null,
        /**  */
        public ?string $myParticipantId = null,
        /** The list of requested modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data. */
        public array $requestedModalities = [],
        /** The result information. For example, the result can hold termination reason. Read-only. */
        public ?string $resultInfo = null,
        /** The originator of the call. */
        public ?string $source = null,
        /** The call state. Possible values are: incoming, establishing, ringing, established, hold, transferring, transferAccepted, redirecting, terminating, terminated. Read-only. */
        public ?string $state = null,
        /** The subject of the conversation. */
        public ?string $subject = null,
        /** The targets of the call. Required information for creating peer to peer call. */
        public array $targets = [],
        /**  */
        public ?string $tenantId = null,
        /**  */
        public ?string $toneInfo = null,
        /** The transcription information for the call. Read-only. */
        public ?string $transcription = null,
        /**  */
        public array $audioRoutingGroups = [],
        /**  */
        public array $contentSharingSessions = [],
        /**  */
        public array $operations = [],
        /**  */
        public array $participants = []
    ) {}
}
