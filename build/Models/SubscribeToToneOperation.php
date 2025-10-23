<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubscribeToToneOperation
 */
class SubscribeToToneOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Unique Client Context string. Max limit is 256 chars. */
    public ?string $clientContext = null;

    /** 
     * The result information. Read-only.
     * @var ResultInfo|\stdClass|null
     */
    public mixed $resultInfo = null;

    /**  */
    public ?OperationStatus $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['clientContext'])) {
            $this->clientContext = $data['clientContext'];
        }
        if (isset($data['resultInfo'])) {
            $this->resultInfo = $data['resultInfo'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
