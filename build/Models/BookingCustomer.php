<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCustomer
 */
class BookingCustomer
{
    /**
     * Addresses associated with the customer. The attribute type of physicalAddress isn't supported in v1.0. Internally we map the addresses to the type others.
     */
    private array $addresses = [];

    /**
     * The date, time, and time zone when the customer was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The name of the customer.
     */
    private ?string $displayName;

    /**
     * The SMTP address of the customer.
     */
    private ?string $emailAddress;

    /**
     * The date, time, and time zone when the customer was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * Represents a customer of the business.
     * @var string[]
     */
    private array $phones = [];


    public function getAddresses(): array
    {
        return $this->addresses;
    }

    public function setAddresses(array $addresses): self
    {
        $this->addresses = $addresses;
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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPhones(): array
    {
        return $this->phones;
    }

    /**
     * @param string[] $phones
     */
    public function setPhones(array $phones): self
    {
        $this->phones = $phones;
        return $this;
    }

}
