<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActionResultPart
 */
class ActionResultPart
{
    /** 
     * The error that occurred, if any, during the bulk operation.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
    }
}
