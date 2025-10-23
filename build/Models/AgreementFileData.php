<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFileData
 */
class AgreementFileData
{
    /** Data that represents the terms of use PDF document. Read-only. */
    public ?string $data = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['data'])) {
            $this->data = $data['data'];
        }
    }
}
