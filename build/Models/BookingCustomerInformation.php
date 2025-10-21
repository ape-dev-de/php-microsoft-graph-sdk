<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCustomerInformation
 */
class BookingCustomerInformation
{
    /**
     * The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
     */
    private ?string $customerId;

    /**
     * It consists of the list of custom questions and answers given by the customer as part of the appointment
     */
    private array $customQuestionAnswers = [];

    /**
     * The SMTP address of the bookingCustomer who is booking the appointment
     */
    private ?string $emailAddress;

    /**
     * Represents location information for the bookingCustomer who is booking the appointment.
     */
    private ?string $location;

    /**
     * The customer's name.
     */
    private ?string $name;

    /**
     * Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID. You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by the customerId.
     */
    private ?string $notes;

    /**
     * The customer's phone number.
     */
    private ?string $phone;

    /**
     * The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     */
    private ?string $timeZone;


    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    public function getCustomQuestionAnswers(): array
    {
        return $this->customQuestionAnswers;
    }

    public function setCustomQuestionAnswers(array $customQuestionAnswers): self
    {
        $this->customQuestionAnswers = $customQuestionAnswers;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

    public function setTimeZone(?string $timeZone): self
    {
        $this->timeZone = $timeZone;
        return $this;
    }

}
