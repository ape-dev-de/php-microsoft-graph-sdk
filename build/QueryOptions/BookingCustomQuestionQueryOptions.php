<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomQuestion resources
 *
 * Available select fields:
 * - answerInputType
 * - answerOptions
 * - createdDateTime
 * - displayName
 * - lastUpdatedDateTime
 */
class BookingCustomQuestionQueryOptions extends QueryOptions
{
    public const FIELD_ANSWER_INPUT_TYPE = 'answerInputType';
    public const FIELD_ANSWER_OPTIONS = 'answerOptions';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';

    /**
     * Select specific BookingCustomQuestion properties
     * 
     * @param array<string> $select Use BookingCustomQuestionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
