<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterBase
 */
class PrinterBase
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The capabilities of the printer/printerShare.
     * @var PrinterCapabilities|\stdClass|null
     */
    public PrinterCapabilities|\stdClass|null $capabilities = null;

    /** 
     * The default print settings of printer/printerShare.
     * @var PrinterDefaults|\stdClass|null
     */
    public PrinterDefaults|\stdClass|null $defaults = null;

    /** The name of the printer/printerShare. */
    public ?string $displayName = null;

    /** Specifies whether the printer/printerShare is currently accepting new print jobs. */
    public ?bool $isAcceptingJobs = null;

    /** 
     * The physical and/or organizational location of the printer/printerShare.
     * @var PrinterLocation|\stdClass|null
     */
    public PrinterLocation|\stdClass|null $location = null;

    /** The manufacturer of the printer/printerShare. */
    public ?string $manufacturer = null;

    /** The model name of the printer/printerShare. */
    public ?string $model = null;

    /**  */
    public ?PrinterStatus $status = null;

    /** 
     * The list of jobs that are queued for printing by the printer/printerShare.
     * @var PrintJob[]
     */
    public array $jobs = [];


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
        if (isset($data['capabilities'])) {
            $this->capabilities = is_array($data['capabilities']) ? new PrinterCapabilities($data['capabilities']) : $data['capabilities'];
        }
        if (isset($data['defaults'])) {
            $this->defaults = is_array($data['defaults']) ? new PrinterDefaults($data['defaults']) : $data['defaults'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isAcceptingJobs'])) {
            $this->isAcceptingJobs = $data['isAcceptingJobs'];
        }
        if (isset($data['location'])) {
            $this->location = is_array($data['location']) ? new PrinterLocation($data['location']) : $data['location'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new PrinterStatus($data['status']) : $data['status'];
        }
        if (isset($data['jobs'])) {
            $this->jobs = $data['jobs'];
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
