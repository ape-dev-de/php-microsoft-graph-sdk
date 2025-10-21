<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Call resources
 *
 * Available select fields:
 * - callbackUri
 * - callChainId
 * - callOptions
 * - callRoutes
 * - chatInfo
 * - direction
 * - incomingContext
 * - mediaConfig
 * - mediaState
 * - meetingInfo
 * - myParticipantId
 * - requestedModalities
 * - resultInfo
 * - source
 * - state
 * - subject
 * - targets
 * - tenantId
 * - toneInfo
 * - transcription
 * - audioRoutingGroups
 * - contentSharingSessions
 * - operations
 * - participants
 */
class CallQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Call
     */
    public const FIELD_CALLBACK_URI = 'callbackUri';
    public const FIELD_CALL_CHAIN_ID = 'callChainId';
    public const FIELD_CALL_OPTIONS = 'callOptions';
    public const FIELD_CALL_ROUTES = 'callRoutes';
    public const FIELD_CHAT_INFO = 'chatInfo';
    public const FIELD_DIRECTION = 'direction';
    public const FIELD_INCOMING_CONTEXT = 'incomingContext';
    public const FIELD_MEDIA_CONFIG = 'mediaConfig';
    public const FIELD_MEDIA_STATE = 'mediaState';
    public const FIELD_MEETING_INFO = 'meetingInfo';
    public const FIELD_MY_PARTICIPANT_ID = 'myParticipantId';
    public const FIELD_REQUESTED_MODALITIES = 'requestedModalities';
    public const FIELD_RESULT_INFO = 'resultInfo';
    public const FIELD_SOURCE = 'source';
    public const FIELD_STATE = 'state';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_TARGETS = 'targets';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_TONE_INFO = 'toneInfo';
    public const FIELD_TRANSCRIPTION = 'transcription';
    public const FIELD_AUDIO_ROUTING_GROUPS = 'audioRoutingGroups';
    public const FIELD_CONTENT_SHARING_SESSIONS = 'contentSharingSessions';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_PARTICIPANTS = 'participants';

    /**
     * Select specific Call properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
