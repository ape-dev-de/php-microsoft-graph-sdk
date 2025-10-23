<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConvertIdResult
 */
class ConvertIdResult
{
    /** 
     * An error object indicating the reason for the conversion failure. This value isn't present if the conversion succeeded.
     * @var GenericError|\stdClass|null
     */
    public mixed $errorDetails = null;

    /** The identifier that was converted. This value is the original, un-converted identifier. */
    public ?string $sourceId = null;

    /** The converted identifier. This value isn't present if the conversion failed. */
    public ?string $targetId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['errorDetails'])) {
            $this->errorDetails = $data['errorDetails'];
        }
        if (isset($data['sourceId'])) {
            $this->sourceId = $data['sourceId'];
        }
        if (isset($data['targetId'])) {
            $this->targetId = $data['targetId'];
        }
    }
}
