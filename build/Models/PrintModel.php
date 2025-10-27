<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintModel
 */
class PrintModel
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Tenant-wide settings for the Universal Print service.
     * @var PrintSettings|\stdClass|null
     */
    public mixed $settings = null;

    /** 
     * The list of available print connectors.
     * @var PrintConnector[]
     */
    public array $connectors = [];

    /** 
     * The list of print long running operations.
     * @var PrintOperation[]
     */
    public array $operations = [];

    /** 
     * The list of printers registered in the tenant.
     * @var Printer[]
     */
    public array $printers = [];

    /** 
     * The list of available Universal Print service endpoints.
     * @var PrintService[]
     */
    public array $services = [];

    /** 
     * The list of printer shares registered in the tenant.
     * @var PrinterShare[]
     */
    public array $shares = [];

    /** 
     * List of abstract definition for a task that can be triggered when various events occur within Universal Print.
     * @var PrintTaskDefinition[]
     */
    public array $taskDefinitions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new PrintSettings($data['settings']) : $data['settings'];
        }
        if (isset($data['connectors'])) {
            $this->connectors = $data['connectors'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['printers'])) {
            $this->printers = $data['printers'];
        }
        if (isset($data['services'])) {
            $this->services = $data['services'];
        }
        if (isset($data['shares'])) {
            $this->shares = $data['shares'];
        }
        if (isset($data['taskDefinitions'])) {
            $this->taskDefinitions = $data['taskDefinitions'];
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
