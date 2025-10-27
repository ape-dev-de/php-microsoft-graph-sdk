<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReportRoot
 */
class ReportRoot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Container for navigation properties for Microsoft Entra authentication methods resources.
     * @var AuthenticationMethodsRoot|\stdClass|null
     */
    public mixed $authenticationMethods = null;

    /** 
     * Retrieve a list of daily print usage summaries, grouped by printer.
     * @var PrintUsageByPrinter[]
     */
    public array $dailyPrintUsageByPrinter = [];

    /** 
     * Retrieve a list of daily print usage summaries, grouped by user.
     * @var PrintUsageByUser[]
     */
    public array $dailyPrintUsageByUser = [];

    /** 
     * Retrieve a list of monthly print usage summaries, grouped by printer.
     * @var PrintUsageByPrinter[]
     */
    public array $monthlyPrintUsageByPrinter = [];

    /** 
     * Retrieve a list of monthly print usage summaries, grouped by user.
     * @var PrintUsageByUser[]
     */
    public array $monthlyPrintUsageByUser = [];

    /** 
     * Represents billing details for a Microsoft direct partner.
     * @var Partners|\stdClass|null
     */
    public mixed $partners = null;

    /** 
     * Represents an abstract type that contains resources for attack simulation and training reports.
     * @var SecurityReportsRoot|\stdClass|null
     */
    public mixed $security = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['authenticationMethods'])) {
            $this->authenticationMethods = is_array($data['authenticationMethods']) ? new AuthenticationMethodsRoot($data['authenticationMethods']) : $data['authenticationMethods'];
        }
        if (isset($data['dailyPrintUsageByPrinter'])) {
            $this->dailyPrintUsageByPrinter = $data['dailyPrintUsageByPrinter'];
        }
        if (isset($data['dailyPrintUsageByUser'])) {
            $this->dailyPrintUsageByUser = $data['dailyPrintUsageByUser'];
        }
        if (isset($data['monthlyPrintUsageByPrinter'])) {
            $this->monthlyPrintUsageByPrinter = $data['monthlyPrintUsageByPrinter'];
        }
        if (isset($data['monthlyPrintUsageByUser'])) {
            $this->monthlyPrintUsageByUser = $data['monthlyPrintUsageByUser'];
        }
        if (isset($data['partners'])) {
            $this->partners = is_array($data['partners']) ? new Partners($data['partners']) : $data['partners'];
        }
        if (isset($data['security'])) {
            $this->security = is_array($data['security']) ? new SecurityReportsRoot($data['security']) : $data['security'];
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
