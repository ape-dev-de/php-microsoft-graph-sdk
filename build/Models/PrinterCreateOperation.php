<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterCreateOperation
 */
class PrinterCreateOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The DateTimeOffset when the operation was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?PrintOperationStatus $status = null;

    /** The signed certificate created during the registration process. Read-only. */
    public ?string $certificate = null;

    /** 
     * The created printer entity. Read-only.
     * @var Printer|\stdClass|null
     */
    public Printer|\stdClass|null $printer = null;


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new PrintOperationStatus($data['status']) : $data['status'];
        }
        if (isset($data['certificate'])) {
            $this->certificate = $data['certificate'];
        }
        if (isset($data['printer'])) {
            $this->printer = is_array($data['printer']) ? new Printer($data['printer']) : $data['printer'];
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
