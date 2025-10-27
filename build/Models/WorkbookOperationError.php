<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperationError
 */
class WorkbookOperationError
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The error code. */
    public ?string $code = null;

    /** 
     * 
     * @var WorkbookOperationError|\stdClass|null
     */
    public mixed $innerError = null;

    /** The error message. */
    public ?string $message = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['innerError'])) {
            $this->innerError = is_array($data['innerError']) ? new WorkbookOperationError($data['innerError']) : $data['innerError'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
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
