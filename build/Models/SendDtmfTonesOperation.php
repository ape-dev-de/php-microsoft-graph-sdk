<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SendDtmfTonesOperation
 */
class SendDtmfTonesOperation
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
     * The results of the action. Possible values are: unknown, completedSuccessfully, mediaOperationCanceled, unknownfutureValue.
     * @var SendDtmfCompletionReason|\stdClass|null
     */
    public mixed $completionReason = null;


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
            $this->resultInfo = is_array($data['resultInfo']) ? new ResultInfo($data['resultInfo']) : $data['resultInfo'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new OperationStatus($data['status']) : $data['status'];
        }
        if (isset($data['completionReason'])) {
            $this->completionReason = is_array($data['completionReason']) ? new SendDtmfCompletionReason($data['completionReason']) : $data['completionReason'];
        }
    }
}
