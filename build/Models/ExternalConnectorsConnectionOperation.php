<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConnectionOperation
 */
class ExternalConnectorsConnectionOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * If status is failed, provides more information about the error that caused the failure.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** 
     * Indicates the status of the asynchronous operation. Possible values are: unspecified, inprogress, completed, failed, unknownFutureValue.
     * @var ExternalConnectorsConnectionOperationStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
