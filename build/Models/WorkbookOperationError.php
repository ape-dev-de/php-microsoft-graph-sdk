<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperationError
 */
class WorkbookOperationError
{
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
}
