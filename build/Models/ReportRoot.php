<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReportRoot
 */
class ReportRoot
{
    /**
     * Container for navigation properties for Microsoft Entra authentication methods resources.
     */
    private ?string $authenticationMethods;

    /**
     * Retrieve a list of daily print usage summaries, grouped by printer.
     */
    private array $dailyPrintUsageByPrinter = [];

    /**
     * Retrieve a list of daily print usage summaries, grouped by user.
     */
    private array $dailyPrintUsageByUser = [];

    /**
     * Retrieve a list of monthly print usage summaries, grouped by printer.
     */
    private array $monthlyPrintUsageByPrinter = [];

    /**
     * Retrieve a list of monthly print usage summaries, grouped by user.
     */
    private array $monthlyPrintUsageByUser = [];

    /**
     * Represents billing details for a Microsoft direct partner.
     */
    private ?string $partners;

    /**
     * Represents an abstract type that contains resources for attack simulation and training reports.
     */
    private ?string $security;


    public function getAuthenticationMethods(): ?string
    {
        return $this->authenticationMethods;
    }

    public function setAuthenticationMethods(?string $authenticationMethods): self
    {
        $this->authenticationMethods = $authenticationMethods;
        return $this;
    }

    public function getDailyPrintUsageByPrinter(): array
    {
        return $this->dailyPrintUsageByPrinter;
    }

    public function setDailyPrintUsageByPrinter(array $dailyPrintUsageByPrinter): self
    {
        $this->dailyPrintUsageByPrinter = $dailyPrintUsageByPrinter;
        return $this;
    }

    public function getDailyPrintUsageByUser(): array
    {
        return $this->dailyPrintUsageByUser;
    }

    public function setDailyPrintUsageByUser(array $dailyPrintUsageByUser): self
    {
        $this->dailyPrintUsageByUser = $dailyPrintUsageByUser;
        return $this;
    }

    public function getMonthlyPrintUsageByPrinter(): array
    {
        return $this->monthlyPrintUsageByPrinter;
    }

    public function setMonthlyPrintUsageByPrinter(array $monthlyPrintUsageByPrinter): self
    {
        $this->monthlyPrintUsageByPrinter = $monthlyPrintUsageByPrinter;
        return $this;
    }

    public function getMonthlyPrintUsageByUser(): array
    {
        return $this->monthlyPrintUsageByUser;
    }

    public function setMonthlyPrintUsageByUser(array $monthlyPrintUsageByUser): self
    {
        $this->monthlyPrintUsageByUser = $monthlyPrintUsageByUser;
        return $this;
    }

    public function getPartners(): ?string
    {
        return $this->partners;
    }

    public function setPartners(?string $partners): self
    {
        $this->partners = $partners;
        return $this;
    }

    public function getSecurity(): ?string
    {
        return $this->security;
    }

    public function setSecurity(?string $security): self
    {
        $this->security = $security;
        return $this;
    }

}
