<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncompleteData
 */
class IncompleteData
{
    /** The service does not have source data before the specified time. */
    public ?\DateTimeInterface $missingDataBeforeDateTime = null;

    /** Some data was not recorded due to excessive activity. */
    public ?bool $wasThrottled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['missingDataBeforeDateTime'])) {
            $this->missingDataBeforeDateTime = is_string($data['missingDataBeforeDateTime']) ? new \DateTimeImmutable($data['missingDataBeforeDateTime']) : $data['missingDataBeforeDateTime'];
        }
        if (isset($data['wasThrottled'])) {
            $this->wasThrottled = $data['wasThrottled'];
        }
    }
}
