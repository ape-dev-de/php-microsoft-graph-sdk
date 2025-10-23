<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectedContent
 */
class ProtectedContent
{
    /** The content id */
    public ?string $cid = null;

    /** The content format. */
    public ?string $format = null;

    /** The unique identifier for the sensitivity label applied to the content. */
    public ?string $labelId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['cid'])) {
            $this->cid = $data['cid'];
        }
        if (isset($data['format'])) {
            $this->format = $data['format'];
        }
        if (isset($data['labelId'])) {
            $this->labelId = $data['labelId'];
        }
    }
}
