<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomerInformation resources
 *
 * Available select fields:
 * - customerId
 * - customQuestionAnswers
 * - emailAddress
 * - location
 * - name
 * - notes
 * - phone
 * - timeZone
 */
class BookingCustomerInformationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingCustomerInformation
     */
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_CUSTOM_QUESTION_ANSWERS = 'customQuestionAnswers';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_LOCATION = 'location';
    public const FIELD_NAME = 'name';
    public const FIELD_NOTES = 'notes';
    public const FIELD_PHONE = 'phone';
    public const FIELD_TIME_ZONE = 'timeZone';

    /**
     * Select specific BookingCustomerInformation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
