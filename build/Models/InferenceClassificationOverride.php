<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InferenceClassificationOverride
 */
class InferenceClassificationOverride
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Specifies how incoming messages from a specific sender should always be classified as. The possible values are: focused, other.
     * @var InferenceClassificationType|\stdClass|null
     */
    public mixed $classifyAs = null;

    /** 
     * The email address information of the sender for whom the override is created.
     * @var EmailAddress|\stdClass|null
     */
    public mixed $senderEmailAddress = null;


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
        if (isset($data['classifyAs'])) {
            $this->classifyAs = is_array($data['classifyAs']) ? new InferenceClassificationType($data['classifyAs']) : $data['classifyAs'];
        }
        if (isset($data['senderEmailAddress'])) {
            $this->senderEmailAddress = is_array($data['senderEmailAddress']) ? new EmailAddress($data['senderEmailAddress']) : $data['senderEmailAddress'];
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
