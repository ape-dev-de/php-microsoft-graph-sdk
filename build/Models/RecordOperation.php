<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecordOperation
 */
class RecordOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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

    /** The access token required to retrieve the recording. */
    public ?string $recordingAccessToken = null;

    /** The location where the recording is located. */
    public ?string $recordingLocation = null;


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
        if (isset($data['clientContext'])) {
            $this->clientContext = $data['clientContext'];
        }
        if (isset($data['resultInfo'])) {
            $this->resultInfo = is_array($data['resultInfo']) ? new ResultInfo($data['resultInfo']) : $data['resultInfo'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new OperationStatus($data['status']) : $data['status'];
        }
        if (isset($data['recordingAccessToken'])) {
            $this->recordingAccessToken = $data['recordingAccessToken'];
        }
        if (isset($data['recordingLocation'])) {
            $this->recordingLocation = $data['recordingLocation'];
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
