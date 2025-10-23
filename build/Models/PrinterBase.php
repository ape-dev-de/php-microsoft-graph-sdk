<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterBase
 */
class PrinterBase
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The capabilities of the printer/printerShare.
     * @var PrinterCapabilities|\stdClass|null
     */
    public mixed $capabilities = null;

    /** 
     * The default print settings of printer/printerShare.
     * @var PrinterDefaults|\stdClass|null
     */
    public mixed $defaults = null;

    /** The name of the printer/printerShare. */
    public ?string $displayName = null;

    /** Specifies whether the printer/printerShare is currently accepting new print jobs. */
    public ?bool $isAcceptingJobs = null;

    /** 
     * The physical and/or organizational location of the printer/printerShare.
     * @var PrinterLocation|\stdClass|null
     */
    public mixed $location = null;

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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['capabilities'])) {
            $this->capabilities = $data['capabilities'];
        }
        if (isset($data['defaults'])) {
            $this->defaults = $data['defaults'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isAcceptingJobs'])) {
            $this->isAcceptingJobs = $data['isAcceptingJobs'];
        }
        if (isset($data['location'])) {
            $this->location = $data['location'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['jobs'])) {
            $this->jobs = $data['jobs'];
        }
    }
}
