<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemSource
 */
class DriveItemSource
{
    /** 
     * Enumeration value that indicates the source application where the file was created.
     * @var DriveItemSourceApplication|\stdClass|null
     */
    public mixed $application = null;

    /** The external identifier for the drive item from the source. */
    public ?string $externalId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['application'])) {
            $this->application = $data['application'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
    }
}
