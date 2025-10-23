<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicErrorResponse
 */
class PublicErrorResponse
{
    /** 
     * 
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
            $this->error = $data['error'];
        }
    }
}
