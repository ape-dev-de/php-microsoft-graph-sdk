<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterShare
 */
class PrinterShare
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

    /** If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties. */
    public ?bool $allowAllUsers = null;

    /** The DateTimeOffset when the printer share was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Additional data for a printer share as viewed by the signed-in user.
     * @var PrinterShareViewpoint|\stdClass|null
     */
    public mixed $viewPoint = null;

    /** 
     * The groups whose users have access to print using the printer.
     * @var Group[]
     */
    public array $allowedGroups = [];

    /** 
     * The users who have access to print using the printer.
     * @var User[]
     */
    public array $allowedUsers = [];

    /** 
     * The printer that this printer share is related to.
     * @var Printer|\stdClass|null
     */
    public mixed $printer = null;


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
        if (isset($data['allowAllUsers'])) {
            $this->allowAllUsers = $data['allowAllUsers'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['viewPoint'])) {
            $this->viewPoint = $data['viewPoint'];
        }
        if (isset($data['allowedGroups'])) {
            $this->allowedGroups = $data['allowedGroups'];
        }
        if (isset($data['allowedUsers'])) {
            $this->allowedUsers = $data['allowedUsers'];
        }
        if (isset($data['printer'])) {
            $this->printer = $data['printer'];
        }
    }
}
