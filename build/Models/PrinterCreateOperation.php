<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterCreateOperation
 */
class PrinterCreateOperation
{
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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['certificate'])) {
            $this->certificate = $data['certificate'];
        }
        if (isset($data['printer'])) {
            $this->printer = $data['printer'];
        }
    }
}
