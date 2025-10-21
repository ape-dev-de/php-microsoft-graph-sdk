<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SolutionsRoot
 */
class SolutionsRoot
{
    /**
     */
    private ?string $backupRestore;

    /**
     */
    private array $bookingBusinesses = [];

    /**
     */
    private array $bookingCurrencies = [];

    /**
     */
    private ?string $virtualEvents;


    public function getBackupRestore(): ?string
    {
        return $this->backupRestore;
    }

    public function setBackupRestore(?string $backupRestore): self
    {
        $this->backupRestore = $backupRestore;
        return $this;
    }

    public function getBookingBusinesses(): array
    {
        return $this->bookingBusinesses;
    }

    public function setBookingBusinesses(array $bookingBusinesses): self
    {
        $this->bookingBusinesses = $bookingBusinesses;
        return $this;
    }

    public function getBookingCurrencies(): array
    {
        return $this->bookingCurrencies;
    }

    public function setBookingCurrencies(array $bookingCurrencies): self
    {
        $this->bookingCurrencies = $bookingCurrencies;
        return $this;
    }

    public function getVirtualEvents(): ?string
    {
        return $this->virtualEvents;
    }

    public function setVirtualEvents(?string $virtualEvents): self
    {
        $this->virtualEvents = $virtualEvents;
        return $this;
    }

}
