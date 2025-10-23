<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DateTimeColumn
 */
class DateTimeColumn
{
    /** How the value should be presented in the UX. Must be one of default, friendly, or standard. See below for more details. If unspecified, treated as default. */
    public ?string $displayAs = null;

    /** Indicates whether the value should be presented as a date only or a date and time. Must be one of dateOnly or dateTime */
    public ?string $format = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayAs'])) {
            $this->displayAs = $data['displayAs'];
        }
        if (isset($data['format'])) {
            $this->format = $data['format'];
        }
    }
}
