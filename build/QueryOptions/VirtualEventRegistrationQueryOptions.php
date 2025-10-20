<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistration resources
 *
 * Available select fields:
 * - cancelationDateTime
 * - email
 * - externalRegistrationInformation
 * - firstName
 * - lastName
 * - preferredLanguage
 * - preferredTimezone
 * - registrationDateTime
 * - registrationQuestionAnswers
 * - status
 * - userId
 * - sessions
 */
class VirtualEventRegistrationQueryOptions extends QueryOptions
{
    public const FIELD_CANCELATION_DATE_TIME = 'cancelationDateTime';
    public const FIELD_EMAIL = 'email';
    public const FIELD_EXTERNAL_REGISTRATION_INFORMATION = 'externalRegistrationInformation';
    public const FIELD_FIRST_NAME = 'firstName';
    public const FIELD_LAST_NAME = 'lastName';
    public const FIELD_PREFERRED_LANGUAGE = 'preferredLanguage';
    public const FIELD_PREFERRED_TIMEZONE = 'preferredTimezone';
    public const FIELD_REGISTRATION_DATE_TIME = 'registrationDateTime';
    public const FIELD_REGISTRATION_QUESTION_ANSWERS = 'registrationQuestionAnswers';
    public const FIELD_STATUS = 'status';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_SESSIONS = 'sessions';

    /**
     * Select specific VirtualEventRegistration properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
