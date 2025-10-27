<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCustomerInformation
 */
class BookingCustomerInformation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable. */
    public ?string $customerId = null;

    /** 
     * It consists of the list of custom questions and answers given by the customer as part of the appointment
     * @var BookingQuestionAnswer[]
     */
    public array $customQuestionAnswers = [];

    /** The SMTP address of the bookingCustomer who is booking the appointment */
    public ?string $emailAddress = null;

    /** 
     * Represents location information for the bookingCustomer who is booking the appointment.
     * @var Location|\stdClass|null
     */
    public mixed $location = null;

    /** The customer's name. */
    public ?string $name = null;

    /** Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID. You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by the customerId. */
    public ?string $notes = null;

    /** The customer's phone number. */
    public ?string $phone = null;

    /** The time zone of the customer. For a list of possible values, see dateTimeTimeZone. */
    public ?string $timeZone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['customerId'])) {
            $this->customerId = $data['customerId'];
        }
        if (isset($data['customQuestionAnswers'])) {
            $this->customQuestionAnswers = $data['customQuestionAnswers'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
        if (isset($data['location'])) {
            $this->location = is_array($data['location']) ? new Location($data['location']) : $data['location'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['phone'])) {
            $this->phone = $data['phone'];
        }
        if (isset($data['timeZone'])) {
            $this->timeZone = $data['timeZone'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
