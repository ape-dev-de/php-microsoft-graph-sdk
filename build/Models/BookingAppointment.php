<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingAppointment
 */
class BookingAppointment
{
    /**
     * Additional information that is sent to the customer when an appointment is confirmed.
     */
    private ?string $additionalInformation;

    /**
     * The URL of the meeting to join anonymously.
     */
    private ?string $anonymousJoinWebUrl;

    /**
     * The custom label that can be stamped on this appointment by users.
     */
    private ?string $appointmentLabel;

    /**
     * The date, time, and time zone when the appointment was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The SMTP address of the bookingCustomer who books the appointment.
     */
    private ?string $customerEmailAddress;

    /**
     * The customer's name.
     */
    private ?string $customerName;

    /**
     * Notes from the customer associated with this appointment. You can get the value only when you read this bookingAppointment by its ID. You can set this property only when you initially create an appointment with a new customer.
     */
    private ?string $customerNotes;

    /**
     * The customer's phone number.
     */
    private ?string $customerPhone;

    /**
     * A collection of customer properties for an appointment. An appointment contains a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     */
    private array $customers = [];

    /**
     * The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     */
    private ?string $customerTimeZone;

    /**
     * The length of the appointment, denoted in ISO8601 format.
     */
    private ?string $duration;

    /**
     */
    private ?string $endDateTime;

    /**
     * The current number of customers in the appointment.
     */
    private ?float $filledAttendeesCount;

    /**
     * Indicates that the customer can manage bookings created by the staff. The default value is false.
     */
    private ?bool $isCustomerAllowedToManageBooking;

    /**
     * Indicates that the appointment is held online. The default value is false.
     */
    private ?bool $isLocationOnline;

    /**
     * The URL of the online meeting for the appointment.
     */
    private ?string $joinWebUrl;

    /**
     * The date, time, and time zone when the booking business was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     */
    private ?float $maximumAttendeesCount;

    /**
     * If true indicates that the bookingCustomer for this appointment doesn't wish to receive a confirmation for this appointment.
     */
    private ?bool $optOutOfCustomerEmail;

    /**
     * The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     */
    private ?string $postBuffer;

    /**
     * The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     */
    private ?string $preBuffer;

    /**
     * The regular price for an appointment for the specified bookingService.
     */
    private ?string $price;

    /**
     */
    private ?string $priceType;

    /**
     * The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     */
    private array $reminders = [];

    /**
     * Another tracking ID for the appointment, if the appointment was created directly by the customer on the scheduling page, as opposed to by a staff member on behalf of the customer.
     */
    private ?string $selfServiceAppointmentId;

    /**
     * The ID of the bookingService associated with this appointment.
     */
    private ?string $serviceId;

    /**
     * The location where the service is delivered.
     */
    private ?string $serviceLocation;

    /**
     * The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it''s computed from the service associated with the appointment by the serviceId property.
     */
    private ?string $serviceName;

    /**
     * Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     */
    private ?string $serviceNotes;

    /**
     * If true, indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     */
    private ?bool $smsNotificationsEnabled;

    /**
     * The ID of each bookingStaffMember who is scheduled in this appointment.
     */
    private ?string $staffMemberIds;

    /**
     * Represents a booked appointment of a service by a customer in a business.
     */
    private ?string $startDateTime;

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    public function getAnonymousJoinWebUrl(): ?string
    {
        return $this->anonymousJoinWebUrl;
    }

    public function setAnonymousJoinWebUrl(?string $anonymousJoinWebUrl): self
    {
        $this->anonymousJoinWebUrl = $anonymousJoinWebUrl;
        return $this;
    }

    public function getAppointmentLabel(): ?string
    {
        return $this->appointmentLabel;
    }

    public function setAppointmentLabel(?string $appointmentLabel): self
    {
        $this->appointmentLabel = $appointmentLabel;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getCustomerEmailAddress(): ?string
    {
        return $this->customerEmailAddress;
    }

    public function setCustomerEmailAddress(?string $customerEmailAddress): self
    {
        $this->customerEmailAddress = $customerEmailAddress;
        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;
        return $this;
    }

    public function getCustomerNotes(): ?string
    {
        return $this->customerNotes;
    }

    public function setCustomerNotes(?string $customerNotes): self
    {
        $this->customerNotes = $customerNotes;
        return $this;
    }

    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }

    public function setCustomerPhone(?string $customerPhone): self
    {
        $this->customerPhone = $customerPhone;
        return $this;
    }

    public function getCustomers(): array
    {
        return $this->customers;
    }

    public function setCustomers(array $customers): self
    {
        $this->customers = $customers;
        return $this;
    }

    public function getCustomerTimeZone(): ?string
    {
        return $this->customerTimeZone;
    }

    public function setCustomerTimeZone(?string $customerTimeZone): self
    {
        $this->customerTimeZone = $customerTimeZone;
        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getFilledAttendeesCount(): ?float
    {
        return $this->filledAttendeesCount;
    }

    public function setFilledAttendeesCount(?float $filledAttendeesCount): self
    {
        $this->filledAttendeesCount = $filledAttendeesCount;
        return $this;
    }

    public function getIsCustomerAllowedToManageBooking(): ?bool
    {
        return $this->isCustomerAllowedToManageBooking;
    }

    public function setIsCustomerAllowedToManageBooking(?bool $isCustomerAllowedToManageBooking): self
    {
        $this->isCustomerAllowedToManageBooking = $isCustomerAllowedToManageBooking;
        return $this;
    }

    public function getIsLocationOnline(): ?bool
    {
        return $this->isLocationOnline;
    }

    public function setIsLocationOnline(?bool $isLocationOnline): self
    {
        $this->isLocationOnline = $isLocationOnline;
        return $this;
    }

    public function getJoinWebUrl(): ?string
    {
        return $this->joinWebUrl;
    }

    public function setJoinWebUrl(?string $joinWebUrl): self
    {
        $this->joinWebUrl = $joinWebUrl;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    public function getMaximumAttendeesCount(): ?float
    {
        return $this->maximumAttendeesCount;
    }

    public function setMaximumAttendeesCount(?float $maximumAttendeesCount): self
    {
        $this->maximumAttendeesCount = $maximumAttendeesCount;
        return $this;
    }

    public function getOptOutOfCustomerEmail(): ?bool
    {
        return $this->optOutOfCustomerEmail;
    }

    public function setOptOutOfCustomerEmail(?bool $optOutOfCustomerEmail): self
    {
        $this->optOutOfCustomerEmail = $optOutOfCustomerEmail;
        return $this;
    }

    public function getPostBuffer(): ?string
    {
        return $this->postBuffer;
    }

    public function setPostBuffer(?string $postBuffer): self
    {
        $this->postBuffer = $postBuffer;
        return $this;
    }

    public function getPreBuffer(): ?string
    {
        return $this->preBuffer;
    }

    public function setPreBuffer(?string $preBuffer): self
    {
        $this->preBuffer = $preBuffer;
        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getPriceType(): ?string
    {
        return $this->priceType;
    }

    public function setPriceType(?string $priceType): self
    {
        $this->priceType = $priceType;
        return $this;
    }

    public function getReminders(): array
    {
        return $this->reminders;
    }

    public function setReminders(array $reminders): self
    {
        $this->reminders = $reminders;
        return $this;
    }

    public function getSelfServiceAppointmentId(): ?string
    {
        return $this->selfServiceAppointmentId;
    }

    public function setSelfServiceAppointmentId(?string $selfServiceAppointmentId): self
    {
        $this->selfServiceAppointmentId = $selfServiceAppointmentId;
        return $this;
    }

    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    public function setServiceId(?string $serviceId): self
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    public function getServiceLocation(): ?string
    {
        return $this->serviceLocation;
    }

    public function setServiceLocation(?string $serviceLocation): self
    {
        $this->serviceLocation = $serviceLocation;
        return $this;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(?string $serviceName): self
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    public function getServiceNotes(): ?string
    {
        return $this->serviceNotes;
    }

    public function setServiceNotes(?string $serviceNotes): self
    {
        $this->serviceNotes = $serviceNotes;
        return $this;
    }

    public function getSmsNotificationsEnabled(): ?bool
    {
        return $this->smsNotificationsEnabled;
    }

    public function setSmsNotificationsEnabled(?bool $smsNotificationsEnabled): self
    {
        $this->smsNotificationsEnabled = $smsNotificationsEnabled;
        return $this;
    }

    public function getStaffMemberIds(): ?string
    {
        return $this->staffMemberIds;
    }

    public function setStaffMemberIds(?string $staffMemberIds): self
    {
        $this->staffMemberIds = $staffMemberIds;
        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

}
