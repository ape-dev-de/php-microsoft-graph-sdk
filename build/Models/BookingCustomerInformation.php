<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCustomerInformation
 */
class BookingCustomerInformation
{
    public function __construct(
        /** The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable. */
        public ?string $customerId = null,
        /** It consists of the list of custom questions and answers given by the customer as part of the appointment */
        public array $customQuestionAnswers = [],
        /** The SMTP address of the bookingCustomer who is booking the appointment */
        public ?string $emailAddress = null,
        /** Represents location information for the bookingCustomer who is booking the appointment. */
        public ?Location $location = null,
        /** The customer's name. */
        public ?string $name = null,
        /** Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID. You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by the customerId. */
        public ?string $notes = null,
        /** The customer's phone number. */
        public ?string $phone = null,
        /** The time zone of the customer. For a list of possible values, see dateTimeTimeZone. */
        public ?string $timeZone = null
    ) {}
}
