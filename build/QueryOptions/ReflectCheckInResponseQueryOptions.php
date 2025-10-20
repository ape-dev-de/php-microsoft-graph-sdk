<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReflectCheckInResponse resources
 *
 * Available select fields:
 * - checkInId
 * - checkInTitle
 * - classId
 * - createdDateTime
 * - creatorId
 * - isClosed
 * - responderId
 * - responseEmotion
 * - responseFeedback
 * - submitDateTime
 */
class ReflectCheckInResponseQueryOptions extends QueryOptions
{
    public const FIELD_CHECK_IN_ID = 'checkInId';
    public const FIELD_CHECK_IN_TITLE = 'checkInTitle';
    public const FIELD_CLASS_ID = 'classId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CREATOR_ID = 'creatorId';
    public const FIELD_IS_CLOSED = 'isClosed';
    public const FIELD_RESPONDER_ID = 'responderId';
    public const FIELD_RESPONSE_EMOTION = 'responseEmotion';
    public const FIELD_RESPONSE_FEEDBACK = 'responseFeedback';
    public const FIELD_SUBMIT_DATE_TIME = 'submitDateTime';

    /**
     * Select specific ReflectCheckInResponse properties
     * 
     * @param array<string> $select Use ReflectCheckInResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
