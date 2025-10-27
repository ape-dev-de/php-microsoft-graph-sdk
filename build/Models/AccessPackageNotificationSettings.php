<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageNotificationSettings
 */
class AccessPackageNotificationSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates if notification emails for an access package are disabled within an access package assignment policy. */
    public ?bool $isAssignmentNotificationDisabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isAssignmentNotificationDisabled'])) {
            $this->isAssignmentNotificationDisabled = $data['isAssignmentNotificationDisabled'];
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
