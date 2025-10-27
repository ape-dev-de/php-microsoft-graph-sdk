<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingAppointment
 */
class BookingAppointment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Additional information that is sent to the customer when an appointment is confirmed. */
    public ?string $additionalInformation = null;

    /** The URL of the meeting to join anonymously. */
    public ?string $anonymousJoinWebUrl = null;

    /** The custom label that can be stamped on this appointment by users. */
    public ?string $appointmentLabel = null;

    /** The date, time, and time zone when the appointment was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The SMTP address of the bookingCustomer who books the appointment. */
    public ?string $customerEmailAddress = null;

    /** The customer's name. */
    public ?string $customerName = null;

    /** Notes from the customer associated with this appointment. You can get the value only when you read this bookingAppointment by its ID. You can set this property only when you initially create an appointment with a new customer. */
    public ?string $customerNotes = null;

    /** The customer's phone number. */
    public ?string $customerPhone = null;

    /** 
     * A collection of customer properties for an appointment. An appointment contains a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     * @var BookingCustomerInformationBase[]
     */
    public array $customers = [];

    /** The time zone of the customer. For a list of possible values, see dateTimeTimeZone. */
    public ?string $customerTimeZone = null;

    /** The length of the appointment, denoted in ISO8601 format. */
    public ?string $duration = null;

    /**  */
    public ?DateTimeTimeZone $endDateTime = null;

    /** The current number of customers in the appointment. */
    public ?float $filledAttendeesCount = null;

    /** Indicates that the customer can manage bookings created by the staff. The default value is false. */
    public ?bool $isCustomerAllowedToManageBooking = null;

    /** Indicates that the appointment is held online. The default value is false. */
    public ?bool $isLocationOnline = null;

    /** The URL of the online meeting for the appointment. */
    public ?string $joinWebUrl = null;

    /** The date, time, and time zone when the booking business was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation. */
    public ?float $maximumAttendeesCount = null;

    /** If true indicates that the bookingCustomer for this appointment doesn't wish to receive a confirmation for this appointment. */
    public ?bool $optOutOfCustomerEmail = null;

    /** The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format. */
    public ?string $postBuffer = null;

    /** The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format. */
    public ?string $preBuffer = null;

    /** The regular price for an appointment for the specified bookingService. */
    public ?string $price = null;

    /**  */
    public ?BookingPriceType $priceType = null;

    /** 
     * The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     * @var BookingReminder[]
     */
    public array $reminders = [];

    /** Another tracking ID for the appointment, if the appointment was created directly by the customer on the scheduling page, as opposed to by a staff member on behalf of the customer. */
    public ?string $selfServiceAppointmentId = null;

    /** The ID of the bookingService associated with this appointment. */
    public ?string $serviceId = null;

    /** 
     * The location where the service is delivered.
     * @var Location|\stdClass|null
     */
    public mixed $serviceLocation = null;

    /** The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it's computed from the service associated with the appointment by the serviceId property. */
    public ?string $serviceName = null;

    /** Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID. */
    public ?string $serviceNotes = null;

    /** If true, indicates SMS notifications will be sent to the customers for the appointment. Default value is false. */
    public ?bool $smsNotificationsEnabled = null;

    /** 
     * The ID of each bookingStaffMember who is scheduled in this appointment.
     * @var string[]
     */
    public array $staffMemberIds = [];

    /**  */
    public ?DateTimeTimeZone $startDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['additionalInformation'])) {
            $this->additionalInformation = $data['additionalInformation'];
        }
        if (isset($data['anonymousJoinWebUrl'])) {
            $this->anonymousJoinWebUrl = $data['anonymousJoinWebUrl'];
        }
        if (isset($data['appointmentLabel'])) {
            $this->appointmentLabel = $data['appointmentLabel'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customerEmailAddress'])) {
            $this->customerEmailAddress = $data['customerEmailAddress'];
        }
        if (isset($data['customerName'])) {
            $this->customerName = $data['customerName'];
        }
        if (isset($data['customerNotes'])) {
            $this->customerNotes = $data['customerNotes'];
        }
        if (isset($data['customerPhone'])) {
            $this->customerPhone = $data['customerPhone'];
        }
        if (isset($data['customers'])) {
            $this->customers = $data['customers'];
        }
        if (isset($data['customerTimeZone'])) {
            $this->customerTimeZone = $data['customerTimeZone'];
        }
        if (isset($data['duration'])) {
            $this->duration = $data['duration'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_array($data['endDateTime']) ? new DateTimeTimeZone($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['filledAttendeesCount'])) {
            $this->filledAttendeesCount = $data['filledAttendeesCount'];
        }
        if (isset($data['isCustomerAllowedToManageBooking'])) {
            $this->isCustomerAllowedToManageBooking = $data['isCustomerAllowedToManageBooking'];
        }
        if (isset($data['isLocationOnline'])) {
            $this->isLocationOnline = $data['isLocationOnline'];
        }
        if (isset($data['joinWebUrl'])) {
            $this->joinWebUrl = $data['joinWebUrl'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['maximumAttendeesCount'])) {
            $this->maximumAttendeesCount = $data['maximumAttendeesCount'];
        }
        if (isset($data['optOutOfCustomerEmail'])) {
            $this->optOutOfCustomerEmail = $data['optOutOfCustomerEmail'];
        }
        if (isset($data['postBuffer'])) {
            $this->postBuffer = $data['postBuffer'];
        }
        if (isset($data['preBuffer'])) {
            $this->preBuffer = $data['preBuffer'];
        }
        if (isset($data['price'])) {
            $this->price = $data['price'];
        }
        if (isset($data['priceType'])) {
            $this->priceType = is_array($data['priceType']) ? new BookingPriceType($data['priceType']) : $data['priceType'];
        }
        if (isset($data['reminders'])) {
            $this->reminders = $data['reminders'];
        }
        if (isset($data['selfServiceAppointmentId'])) {
            $this->selfServiceAppointmentId = $data['selfServiceAppointmentId'];
        }
        if (isset($data['serviceId'])) {
            $this->serviceId = $data['serviceId'];
        }
        if (isset($data['serviceLocation'])) {
            $this->serviceLocation = is_array($data['serviceLocation']) ? new Location($data['serviceLocation']) : $data['serviceLocation'];
        }
        if (isset($data['serviceName'])) {
            $this->serviceName = $data['serviceName'];
        }
        if (isset($data['serviceNotes'])) {
            $this->serviceNotes = $data['serviceNotes'];
        }
        if (isset($data['smsNotificationsEnabled'])) {
            $this->smsNotificationsEnabled = $data['smsNotificationsEnabled'];
        }
        if (isset($data['staffMemberIds'])) {
            $this->staffMemberIds = $data['staffMemberIds'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_array($data['startDateTime']) ? new DateTimeTimeZone($data['startDateTime']) : $data['startDateTime'];
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
